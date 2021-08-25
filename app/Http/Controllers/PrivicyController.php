<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePrivicyRequest;
use App\Http\Requests\UpdatePrivicyRequest;
use App\Repositories\PrivicyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PrivicyController extends AppBaseController
{
    /** @var  PrivicyRepository */
    private $privicyRepository;

    public function __construct(PrivicyRepository $privicyRepo)
    {
        $this->privicyRepository = $privicyRepo;
    }

    /**
     * Display a listing of the Privicy.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $privicies = $this->privicyRepository->all();

        return view('privicies.index')
            ->with('privicies', $privicies);
    }

    /**
     * Show the form for creating a new Privicy.
     *
     * @return Response
     */
    public function create()
    {
        return view('privicies.create');
    }

    /**
     * Store a newly created Privicy in storage.
     *
     * @param CreatePrivicyRequest $request
     *
     * @return Response
     */
    public function store(CreatePrivicyRequest $request)
    {
        $input = $request->all();

        $privicy = $this->privicyRepository->create($input);

        Flash::success('Privicy saved successfully.');

        return redirect(route('privicies.index'));
    }

    /**
     * Display the specified Privicy.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $privicy = $this->privicyRepository->find($id);

        if (empty($privicy)) {
            Flash::error('Privicy not found');

            return redirect(route('privicies.index'));
        }

        return view('privicies.show')->with('privicy', $privicy);
    }

    /**
     * Show the form for editing the specified Privicy.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $privicy = $this->privicyRepository->find($id);

        if (empty($privicy)) {
            Flash::error('Privicy not found');

            return redirect(route('privicies.index'));
        }

        return view('privicies.edit')->with('privicy', $privicy);
    }

    /**
     * Update the specified Privicy in storage.
     *
     * @param int $id
     * @param UpdatePrivicyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePrivicyRequest $request)
    {
        $privicy = $this->privicyRepository->find($id);

        if (empty($privicy)) {
            Flash::error('Privicy not found');

            return redirect(route('privicies.index'));
        }

        $privicy = $this->privicyRepository->update($request->all(), $id);

        Flash::success('Privicy updated successfully.');

        return redirect(route('privicies.index'));
    }

    /**
     * Remove the specified Privicy from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $privicy = $this->privicyRepository->find($id);

        if (empty($privicy)) {
            Flash::error('Privicy not found');

            return redirect(route('privicies.index'));
        }

        $this->privicyRepository->delete($id);

        Flash::success('Privicy deleted successfully.');

        return redirect(route('privicies.index'));
    }
}
