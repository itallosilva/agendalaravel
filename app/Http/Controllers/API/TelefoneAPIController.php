<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTelefoneAPIRequest;
use App\Http\Requests\API\UpdateTelefoneAPIRequest;
use App\Models\Telefone;
use App\Repositories\TelefoneRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TelefoneController
 * @package App\Http\Controllers\API
 */

class TelefoneAPIController extends AppBaseController
{
    /** @var  TelefoneRepository */
    private $telefoneRepository;

    public function __construct(TelefoneRepository $telefoneRepo)
    {
        $this->telefoneRepository = $telefoneRepo;
    }

    /**
     * @group 3. Telefones
     * 
     * Display a listing of the Telefone.
     * GET|HEAD /telefones
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $telefones = $this->telefoneRepository->all();
        //     $request->except(['skip', 'limit']),
        //     $request->get('skip'),
        //     $request->get('limit')
        // );

        return $this->sendResponse($telefones->toArray(), 'Telefones recebidos com sucesso!');
    }

    /**
     * @group 3. Telefones
     * 
     * Store a newly created Telefone in storage.
     * POST /telefones
     *
     * @param CreateTelefoneAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTelefoneAPIRequest $request)
    {
        $input = $request->all();

        $telefone = $this->telefoneRepository->create($input);

        return $this->sendResponse($telefone->toArray(), 'Telefone salvo com sucesso!');
    }

    /**
     * @group 3. Telefones
     * 
     * Display the specified Telefone.
     * GET|HEAD /telefones/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Telefone $telefone */
        $telefone = $this->telefoneRepository->findWithoutFail($id);

        if (empty($telefone)) {
            return $this->sendError('Telefone não encontrado!');
        }

        return $this->sendResponse($telefone->toArray(), 'Telefone recebido com sucesso!');
    }

    /**
     * @group 3. Telefones
     * 
     * Update the specified Telefone in storage.
     * PUT/PATCH /telefones/{id}
     *
     * @param int $id
     * @param UpdateTelefoneAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTelefoneAPIRequest $request)
    {
        $input = $request->all();

        /** @var Telefone $telefone */
        $telefone = $this->telefoneRepository->findWithoutFail($id);

        if (empty($telefone)) {
            return $this->sendError('Telefone não encontrado!');
        }

        $telefone = $this->telefoneRepository->update($input, $id);

        return $this->sendResponse($telefone->toArray(), 'Telefone atualizado com sucesso!');
    }

    /**
     * @group 3. Telefones
     * 
     * Remove the specified Telefone from storage.
     * DELETE /telefones/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Telefone $telefone */
        $telefone = $this->telefoneRepository->findWithoutFail($id);

        if (empty($telefone)) {
            return $this->sendError('Telefone não encontrado!');
        }

        $telefone->delete();

        return $this->sendSuccess('Telefone excluído com sucesso!');
    }
}
