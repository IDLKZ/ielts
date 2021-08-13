<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorkdayRequest;
use App\Http\Requests\UpdateWorkdayRequest;
use App\Repositories\WorkdayRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class WorkdayController extends AppBaseController
{
    /** @var  WorkdayRepository */
    private $workdayRepository;

    public function __construct(WorkdayRepository $workdayRepo)
    {
        $this->workdayRepository = $workdayRepo;
    }

    /**
     * Display a listing of the Workday.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $workdays = $this->workdayRepository->all();

        return view('workdays.index')
            ->with('workdays', $workdays);
    }

    /**
     * Show the form for creating a new Workday.
     *
     * @return Response
     */
    public function create()
    {
        return view('workdays.create');
    }

    /**
     * Store a newly created Workday in storage.
     *
     * @param CreateWorkdayRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkdayRequest $request)
    {
        $input = $request->all();

        $workday = $this->workdayRepository->create($input);

        Flash::success('Workday saved successfully.');

        return redirect(route('workdays.index'));
    }

    /**
     * Display the specified Workday.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workday = $this->workdayRepository->find($id);

        if (empty($workday)) {
            Flash::error('Workday not found');

            return redirect(route('workdays.index'));
        }

        return view('workdays.show')->with('workday', $workday);
    }

    /**
     * Show the form for editing the specified Workday.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workday = $this->workdayRepository->find($id);

        if (empty($workday)) {
            Flash::error('Workday not found');

            return redirect(route('workdays.index'));
        }

        return view('workdays.edit')->with('workday', $workday);
    }

    /**
     * Update the specified Workday in storage.
     *
     * @param int $id
     * @param UpdateWorkdayRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkdayRequest $request)
    {
        $workday = $this->workdayRepository->find($id);

        if (empty($workday)) {
            Flash::error('Workday not found');

            return redirect(route('workdays.index'));
        }

        $workday = $this->workdayRepository->update($request->all(), $id);

        Flash::success('Workday updated successfully.');

        return redirect(route('workdays.index'));
    }

    /**
     * Remove the specified Workday from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workday = $this->workdayRepository->find($id);

        if (empty($workday)) {
            Flash::error('Workday not found');

            return redirect(route('workdays.index'));
        }

        $this->workdayRepository->delete($id);

        Flash::success('Workday deleted successfully.');

        return redirect(route('workdays.index'));
    }
}
