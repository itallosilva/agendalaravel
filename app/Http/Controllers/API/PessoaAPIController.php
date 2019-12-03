<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePessoaAPIRequest;
use App\Http\Requests\API\UpdatePessoaAPIRequest;
use App\Models\Pessoa;
use App\Repositories\PessoaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PessoaController
 * @package App\Http\Controllers\API
 */

class PessoaAPIController extends AppBaseController
{
    /** @var  PessoaRepository */
    private $pessoaRepository;

    public function __construct(PessoaRepository $pessoaRepo)
    {
        $this->pessoaRepository = $pessoaRepo;
    }

    /**
     * @group 1. Pessoas
     * 
     * Display a listing of the Pessoa.
     * GET|HEAD /pessoas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $pessoas = $this->pessoaRepository->all();
        // $pessoas = $this->pessoaRepository->all(
        //     $request->except(['skip', 'limit']),
        //     $request->get('skip'),
        //     $request->get('limit')
        // );

        return $this->sendResponse($pessoas->toArray(), 'Pessoas retrieved successfully');
    }

    /**
     * @group 1. Pessoas
     * 
     * Store a newly created Pessoa in storage.
     * POST /pessoas
     *
     * @param CreatePessoaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePessoaAPIRequest $request)
    {
        $input = $request->all();

        $pessoa = $this->pessoaRepository->create($input);

        return $this->sendResponse($pessoa->toArray(), 'Pessoa saved successfully');
    }

    /**
     * @group 1. Pessoas
     * 
     * Display the specified Pessoa.
     * GET|HEAD /pessoas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Pessoa $pessoa */
        $pessoa = $this->pessoaRepository->with(['enderecos','telefones'])->findWithoutFail($id);

        if (empty($pessoa)) {
            return $this->sendError('Pessoa not found');
        }

        return $this->sendResponse($pessoa->toArray(), 'Pessoa retrieved successfully');
    }

    /**
     * @group 1. Pessoas
     * 
     * Update the specified Pessoa in storage.
     * PUT/PATCH /pessoas/{id}
     *
     * @param int $id
     * @param UpdatePessoaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePessoaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Pessoa $pessoa */
        $pessoa = $this->pessoaRepository->findWithoutFail($id);

        if (empty($pessoa)) {
            return $this->sendError('Pessoa not found');
        }

        $pessoa = $this->pessoaRepository->update($input, $id);

        return $this->sendResponse($pessoa->toArray(), 'Pessoa updated successfully');
    }

    /**
     * @group 1. Pessoas
     * 
     * Remove the specified Pessoa from storage.
     * DELETE /pessoas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Pessoa $pessoa */
        $pessoa = $this->pessoaRepository->findWithoutFail($id);

        if (empty($pessoa)) {
            return $this->sendError('Pessoa not found');
        }

        $pessoa->delete();

        return $this->sendSuccess('Pessoa deleted successfully');
    }
}
