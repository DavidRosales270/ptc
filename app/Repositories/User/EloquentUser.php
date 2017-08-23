<?php

namespace App\Repositories\User;


use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Database\SQLiteConnection;


class EloquentUser implements UserRepository
{
    /**
     * @var UserAvatarManager
     */
    private $avatarManager;
    /**
     * @var RoleRepository
     */
    private $roles;

    public function __construct()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        return User::find($id);
    }

    /**
     * {@inheritdoc}
     */
    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }


    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
        if (! array_get($data, 'country_id')) {
            $data['country_id'] = null;
        }

        return User::create($data);
    }



    /**
     * {@inheritdoc}
     */
    public function paginate($perPage, $search = null, $status = null)
    {
        $query = User::query();

        if ($status) {
            $query->where('status', $status);
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('username', "like", "%{$search}%");
                $q->orWhere('email', 'like', "%{$search}%");
                $q->orWhere('first_name', 'like', "%{$search}%");
                $q->orWhere('last_name', 'like', "%{$search}%");
            });
        }

        $result = $query->orderBy('created_at', 'desc')
            ->paginate($perPage);

        if ($search) {
            $result->appends(['search' => $search]);
        }

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function update($id, array $data)
    {
        if (array_has($data, 'country_id')) {
            $countryId = array_get($data, 'country_id');

            $data['country_id'] = $countryId ?: null;
        }

        return $this->find($id)->update($data);
    }



    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {
        $user = $this->find($id);

        $this->avatarManager->deleteAvatarIfUploaded($user);

        return $user->delete();
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return User::count();
    }

    /**
     * {@inheritdoc}
     */
    public function newUsersCount()
    {
        return User::whereBetween('created_at', [Carbon::now()->firstOfMonth(), Carbon::now()])
            ->count();
    }

    /**
     * {@inheritdoc}
     */
    public function countByStatus($status)
    {
        return User::where('status', $status)->count();
    }

    /**
     * {@inheritdoc}
     */
    public function latest($count = 20)
    {
        return User::orderBy('created_at', 'DESC')
            ->limit($count)
            ->get();
    }

    /**
     * {@inheritdoc}
     */
    public function countOfNewUsersPerMonth($from, $to)
    {
        $perMonthQuery = $this->getPerMonthQuery();

        $result = User::select([
            DB::raw("{$perMonthQuery} as month"),
            DB::raw('count(id) as count')
        ])
            ->whereBetween('created_at', [$from, $to])
            ->groupBy('month')
            ->orderBy('month', 'ASC')
            ->pluck('count', 'month');

        $counts = [];

        foreach(range(1, 12) as $m) {
            $month = date('F', mktime(0, 0, 0, $m, 1));



            $counts[$month] = isset($result[$m])
                ? $result[$m]
                : 0;
        }

        return $counts;
    }

    /**
     * Creates query that will be used to fetch users per
     * month, depending on type of the connection.
     *
     * @return string
     */
    private function getPerMonthQuery()
    {
        $connection = DB::connection();

        if ($connection instanceof SQLiteConnection) {
            return 'CAST(strftime(\'%m\', created_at) AS INTEGER)';
        }

        return 'MONTH(created_at)';
    }


    /**
     * {@inheritdoc}
     */
    public function findByConfirmationToken($token)
    {
        return User::where('confirmation_token', $token)->first();
    }


}
