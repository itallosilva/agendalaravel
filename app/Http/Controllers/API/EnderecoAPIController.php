<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEnderecoAPIRequest;
use App\Http\Requests\API\UpdateEnderecoAPIRequest;
use App\Models\Endereco;
use App\Repositories\EnderecoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class EnderecoController
 * @package App\Http\Controllers\API
 */

class EnderecoAPIController extends AppBaseController
{
    /** @var  EnderecoRepository */
    private $enderecoRepository;

    public function __construct(EnderecoRepository $enderecoRepo)
    {
        $this->enderecoRepository = $enderecoRepo;
    }

    /**
     * @group 2. Endereços
     * 
     * Display a listing of the Endereco.
     * GET|HEAD /enderecos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $enderecos = $this->enderecoRepository->all();
        // $enderecos = $this->enderecoRepository->all(
        //     $request->except(['skip', 'limit']),
        //     $request->get('skip'),
        //     $request->get('limit')
        // );

        return $this->sendResponse($enderecos->toArray(), 'Endereços recebidos com sucesso!');
    }

    /**
     * @group 2. Endereços
     * 
     * Store a newly created Endereco in storage.
     * POST /enderecos
     *
     * @param CreateEnderecoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEnderecoAPIRequest $request)
    {
        $input = $request->all();

        $endereco = $this->enderecoRepository->create($input);

        return $this->sendResponse($endereco->toArray(), 'Endereço salvo com sucesso!');
    }

    /**
     * @group 2. Endereços
     * 
     * Display the specified Endereco.
     * GET|HEAD /enderecos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Endereco $endereco */
        $endereco = $this->enderecoRepository->findWithoutFail($id);

        if (empty($endereco)) {
            return $this->sendError('Endereco não encontrado!');
        }

        return $this->sendResponse($endereco->toArray(), 'Endereço recebido com sucesso!');
    }

    /**
     * @group 2. Endereços
     * 
     * Update the specified Endereco in storage.
     * PUT/PATCH /enderecos/{id}
     *
     * @param int $id
     * @param UpdateEnderecoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEnderecoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Endereco $endereco */
        $endereco = $this->enderecoRepository->findWithoutFail($id);

        if (empty($endereco)) {
            return $this->sendError('Endereco não encontrado!');
        }

        $endereco = $this->enderecoRepository->update($input, $id);

        return $this->sendResponse($endereco->toArray(), 'Endereço atualizado com sucesso!');
    }

    /**
     * @group 2. Endereços
     * 
     * Remove the specified Endereco from storage.
     * DELETE /enderecos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Endereco $endereco */
        $endereco = $this->enderecoRepository->findWithoutFail($id);

        if (empty($endereco)) {
            return $this->sendError('Endereco não encontrado!');
        }

        $endereco->delete();

        return $this->sendSuccess('Endereço excluído com sucesso!');
    }
}
