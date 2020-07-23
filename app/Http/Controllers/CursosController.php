<?php

namespace App\Http\Controllers;

use App\DataTables\CursosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCursosRequest;
use App\Http\Requests\UpdateCursosRequest;
use App\Repositories\CursosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Mtownsend\XmlToArray\XmlToArray;
use App\Models\Cursos;

class CursosController extends AppBaseController
{
    /** @var  CursosRepository */
    private $cursosRepository;

    public function __construct(CursosRepository $cursosRepo)
    {
        $this->cursosRepository = $cursosRepo;
    }

    /**
     * Display a listing of the Cursos.
     *
     * @param CursosDataTable $cursosDataTable
     * @return Response
     */
    public function index(CursosDataTable $cursosDataTable)
    {
        return $cursosDataTable->render('cursos.index');
    }

    /**
     * Show the form for creating a new Cursos.
     *
     * @return Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created Cursos in storage.
     *
     * @param CreateCursosRequest $request
     *
     * @return Response
     */
    public function store(CreateCursosRequest $request)
    {
        $input = $request->all();
        $path = $request->file('arquivo')->getRealPath();
        $data = file_get_contents($path);
        $cursosConverted = XmlToArray::convert($data);
        $cursos = $cursosConverted['curso'];
        Cursos::insert($cursos);
       
        Flash::success('Cursos saved successfully.');

        return redirect(route('cursos.index'));
    }

    /**
     * Display the specified Cursos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cursos = $this->cursosRepository->find($id);

        if (empty($cursos)) {
            Flash::error('Cursos not found');

            return redirect(route('cursos.index'));
        }

        return view('cursos.show')->with('cursos', $cursos);
    }

    /**
     * Show the form for editing the specified Cursos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cursos = $this->cursosRepository->find($id);

        if (empty($cursos)) {
            Flash::error('Cursos not found');

            return redirect(route('cursos.index'));
        }

        return view('cursos.edit')->with('cursos', $cursos);
    }

    /**
     * Update the specified Cursos in storage.
     *
     * @param  int              $id
     * @param UpdateCursosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCursosRequest $request)
    {
        $cursos = $this->cursosRepository->find($id);

        if (empty($cursos)) {
            Flash::error('Cursos not found');

            return redirect(route('cursos.index'));
        }

        $cursos = $this->cursosRepository->update($request->all(), $id);

        Flash::success('Cursos updated successfully.');

        return redirect(route('cursos.index'));
    }

    /**
     * Remove the specified Cursos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cursos = $this->cursosRepository->find($id);

        if (empty($cursos)) {
            Flash::error('Cursos not found');

            return redirect(route('cursos.index'));
        }

        $this->cursosRepository->delete($id);

        Flash::success('Cursos deleted successfully.');

        return redirect(route('cursos.index'));
    }
}
