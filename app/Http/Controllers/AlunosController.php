<?php

namespace App\Http\Controllers;

use App\DataTables\AlunosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAlunosRequest;
use App\Http\Requests\UpdateAlunosRequest;
use App\Repositories\AlunosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use GuzzleHttp;
use GuzzleHttp\Client;
use Response;

class AlunosController extends AppBaseController
{
    /** @var  AlunosRepository */
    private $alunosRepository;

    public function __construct(AlunosRepository $alunosRepo)
    {
        $this->alunosRepository = $alunosRepo;
    }

    /**
     * Display a listing of the Alunos.
     *
     * @param AlunosDataTable $alunosDataTable
     * @return Response
     */
    public function index(AlunosDataTable $alunosDataTable)
    {
        return $alunosDataTable->render('alunos.index');
    }

    /**
     * Show the form for creating a new Alunos.
     *
     * @return Response
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created Alunos in storage.
     *
     * @param CreateAlunosRequest $request
     *
     * @return Response
     */
    public function store(CreateAlunosRequest $request)
    {
        $input = $request->all();

        $alunos = $this->alunosRepository->create($input);

        Flash::success('Alunos saved successfully.');

        return redirect(route('alunos.index'));
    }

    /**
     * Display the specified Alunos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alunos = $this->alunosRepository->find($id);

        if (empty($alunos)) {
            Flash::error('Alunos not found');

            return redirect(route('alunos.index'));
        }

        return view('alunos.show')->with('alunos', $alunos);
    }

    /**
     * Show the form for editing the specified Alunos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alunos = $this->alunosRepository->find($id);

        if (empty($alunos)) {
            Flash::error('Alunos not found');

            return redirect(route('alunos.index'));
        }

        return view('alunos.edit')->with('alunos', $alunos);
    }

    /**
     * Update the specified Alunos in storage.
     *
     * @param  int              $id
     * @param UpdateAlunosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlunosRequest $request)
    {
        $alunos = $this->alunosRepository->find($id);

        if (empty($alunos)) {
            Flash::error('Alunos not found');

            return redirect(route('alunos.index'));
        }

        $alunos = $this->alunosRepository->update($request->all(), $id);

        Flash::success('Alunos updated successfully.');

        return redirect(route('alunos.index'));
    }

    /**
     * Remove the specified Alunos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alunos = $this->alunosRepository->find($id);

        if (empty($alunos)) {
            Flash::error('Alunos not found');

            return redirect(route('alunos.index'));
        }

        $this->alunosRepository->delete($id);

        Flash::success('Alunos deleted successfully.');

        return redirect(route('alunos.index'));
    }

    public function buscaCep($cep)
    {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://serviceweb.aix.com.br/aixapi/api/cep/' . $cep);
        
        return $res->getBody();
    }
}
