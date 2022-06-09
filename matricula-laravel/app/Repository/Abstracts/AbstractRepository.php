<?php

namespace App\Repository\Abstracts;


class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    private function resolveModel()
    {
        return app($this->model);
    }

    public function all(array $where = null)
    {
        if($where != null){
            $this->model = $this->model->where($where)->get();
            return $this->model;
        }

        return $this->model
            ->all();
    }

    public function find(int $id, array $where = null)
    {
        if($where != null){
            $this->model = $this->model->where($where);
        }

        return $this->model
            ->findOrFail($id);
    }

    public function where($where)
    {
        return $this->model
            ->where($where)->get();
    }

    public function whereMonth($colum, $numberMonth, array $where = null, array $select = null)
    {
        $mod = $this->model->whereMonth($colum, $numberMonth)->get();

        if($where != null){
            $mod = $this->model->whereMonth($colum, $numberMonth)->select($select)->where($where)->get();
        }

        return $mod;
    }

    public function findDate($param, $date_start, $date_end, $orderParam, $typeOrder, array $where = null)
    {
        if($where != null){
            $this->model = $this->model->where($where);
        }

        return $this->model
            ->where($param, '>=',  $date_start)
            ->where($param, '<=',  $date_end)
            ->orderBy($orderParam, $typeOrder)
            ->get();
    }


    public function orderBy($param, $type, array $where = null)
    {
        if($where != null){
            $this->model = $this->model->where($where);
        }
        return $this->model->orderBy($param, $type)->get();
    }


    public function create(array $attributes, array $where = null)
    {
        return $this->model
            ->create($attributes);
    }

    public function update(int $id, array $attributes, array $where = null)
    {
        if($where != null){
            $this->model = $this->model->where($where);
        }

        $model = $this->model
            ->find($id);

        if ($model->update($attributes)) {
            return $model;
        }

        return 0;
    }

    public function destroy($id, array $where = null)
    {
        if($where != null){
            $find = $this->model->where($where)->find($id);

            return $find->delete();
        }

        $this->model->destroy($id);
    }

}
