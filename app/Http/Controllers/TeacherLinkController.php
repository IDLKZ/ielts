<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeacherLinkRequest;
use App\Http\Requests\UpdateTeacherLinkRequest;
use App\Repositories\TeacherLinkRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TeacherLinkController extends AppBaseController
{
    /** @var  TeacherLinkRepository */
    private $teacherLinkRepository;

    public function __construct(TeacherLinkRepository $teacherLinkRepo)
    {
        $this->teacherLinkRepository = $teacherLinkRepo;
    }

    /**
     * Display a listing of the TeacherLink.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $teacherLinks = $this->teacherLinkRepository->all();

        return view('teacher_links.index')
            ->with('teacherLinks', $teacherLinks);
    }

    /**
     * Show the form for creating a new TeacherLink.
     *
     * @return Response
     */
    public function create()
    {
        return view('teacher_links.create');
    }

    /**
     * Store a newly created TeacherLink in storage.
     *
     * @param CreateTeacherLinkRequest $request
     *
     * @return Response
     */
    public function store(CreateTeacherLinkRequest $request)
    {
        $input = $request->all();

        $teacherLink = $this->teacherLinkRepository->create($input);

        Flash::success(__("messages.created"));

        return redirect(route('teacherLinks.index'));
    }

    /**
     * Display the specified TeacherLink.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teacherLink = $this->teacherLinkRepository->find($id);

        if (empty($teacherLink)) {
            Flash::error(__("messages.404"));

            return redirect(route('teacherLinks.index'));
        }

        return view('teacher_links.show')->with('teacherLink', $teacherLink);
    }

    /**
     * Show the form for editing the specified TeacherLink.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teacherLink = $this->teacherLinkRepository->find($id);

        if (empty($teacherLink)) {
            Flash::error(__("messages.404"));

            return redirect(route('teacherLinks.index'));
        }

        return view('teacher_links.edit')->with('teacherLink', $teacherLink);
    }

    /**
     * Update the specified TeacherLink in storage.
     *
     * @param int $id
     * @param UpdateTeacherLinkRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeacherLinkRequest $request)
    {
        $teacherLink = $this->teacherLinkRepository->find($id);

        if (empty($teacherLink)) {
            Flash::error(__("messages.404"));

            return redirect(route('teacherLinks.index'));
        }

        $teacherLink = $this->teacherLinkRepository->update($request->all(), $id);

        Flash::success(__("messages.updated"));

        return redirect(route('teacherLinks.index'));
    }

    /**
     * Remove the specified TeacherLink from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teacherLink = $this->teacherLinkRepository->find($id);

        if (empty($teacherLink)) {
            Flash::error(__("messages.404"));

            return redirect(route('teacherLinks.index'));
        }

        $this->teacherLinkRepository->delete($id);

        Flash::success(__("messages.deleted"));

        return redirect(route('teacherLinks.index'));
    }
}
