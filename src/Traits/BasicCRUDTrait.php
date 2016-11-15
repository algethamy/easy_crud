<?php

namespace EFrontSA\EasyCRUD\Models;

use EFrontSA\EasyCRUD\Requests\CRUDRequest;

trait BasicCRUDTrait
{

    protected $model;

    protected $model_with;

    protected $view;

    protected $extraData = [];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['objects'] = $this->model_with ? $this->model_with->get() : $this->model->all();

        return view($this->view . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data = isset($this->extraData) ? $this->extraData : [];

        return view($this->view . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CRUDRequest $request
     * @return Response
     */
    public function store(CRUDRequest $request)
    {
        $this->model->create($request->all());

        return redirect()->back()->with('message', trans('easy_crud.saved'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $data['object'] = $this->model->findOrFail($id);

        if (isset($this->extraData)) {
            $data = $data + $this->extraData;
        }

        return view($this->view . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CRUDRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(CRUDRequest $request, $id)
    {
        $this->model->findOrFail($id)->update($request->all());

        return redirect()->back()->with('message', trans('easy_crud.saved'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->model->findOrFail($id)->delete();

        return redirect()->back()->with('message',  trans('easy_crud.deleted'));
    }
}
