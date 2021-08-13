<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSecurityRequest;
use App\Http\Requests\UpdateSecurityRequest;
use App\Repositories\SecurityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SecurityController extends AppBaseController
{
    /** @var  SecurityRepository */
    private $securityRepository;

    public function __construct(SecurityRepository $securityRepo)
    {
        $this->securityRepository = $securityRepo;
    }

    /**
     * Display a listing of the Security.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $securities = $this->securityRepository->all();

        return view('securities.index')
            ->with('securities', $securities);
    }

    /**
     * Show the form for creating a new Security.
     *
     * @return Response
     */
    public function create()
    {
        return view('securities.create');
    }

    /**
     * Store a newly created Security in storage.
     *
     * @param CreateSecurityRequest $request
     *
     * @return Response
     */
    public function store(CreateSecurityRequest $request)
    {
        $input = $request->all();

        $security = $this->securityRepository->create($input);

        Flash::success('Security saved successfully.');

        return redirect(route('securities.index'));
    }

    /**
     * Display the specified Security.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $security = $this->securityRepository->find($id);

        if (empty($security)) {
            Flash::error('Security not found');

            return redirect(route('securities.index'));
        }

        return view('securities.show')->with('security', $security);
    }

    /**
     * Show the form for editing the specified Security.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $security = $this->securityRepository->find($id);

        if (empty($security)) {
            Flash::error('Security not found');

            return redirect(route('securities.index'));
        }

        return view('securities.edit')->with('security', $security);
    }

    /**
     * Update the specified Security in storage.
     *
     * @param int $id
     * @param UpdateSecurityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSecurityRequest $request)
    {
        $security = $this->securityRepository->find($id);

        if (empty($security)) {
            Flash::error('Security not found');

            return redirect(route('securities.index'));
        }

        $security = $this->securityRepository->update($request->all(), $id);

        Flash::success('Security updated successfully.');

        return redirect(route('securities.index'));
    }

    /**
     * Remove the specified Security from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $security = $this->securityRepository->find($id);

        if (empty($security)) {
            Flash::error('Security not found');

            return redirect(route('securities.index'));
        }

        $this->securityRepository->delete($id);

        Flash::success('Security deleted successfully.');

        return redirect(route('securities.index'));
    }
}
