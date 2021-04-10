<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSocialRequest;
use App\Http\Requests\UpdateSocialRequest;
use App\Repositories\SocialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SocialController extends AppBaseController
{
    /** @var  SocialRepository */
    private $socialRepository;

    public function __construct(SocialRepository $socialRepo)
    {
        $this->socialRepository = $socialRepo;
    }

    /**
     * Display a listing of the Social.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $socials = $this->socialRepository->all();

        return view('socials.index')
            ->with('socials', $socials);
    }

    /**
     * Show the form for creating a new Social.
     *
     * @return Response
     */
    public function create()
    {
        return view('socials.create');
    }

    /**
     * Store a newly created Social in storage.
     *
     * @param CreateSocialRequest $request
     *
     * @return Response
     */
    public function store(CreateSocialRequest $request)
    {
        $input = $request->all();

        $social = $this->socialRepository->create($input);

        Flash::success(__("messages.created"));

        return redirect(route('socials.index'));
    }

    /**
     * Display the specified Social.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $social = $this->socialRepository->find($id);

        if (empty($social)) {
            Flash::error(__("messages.404"));

            return redirect(route('socials.index'));
        }

        return view('socials.show')->with('social', $social);
    }

    /**
     * Show the form for editing the specified Social.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $social = $this->socialRepository->find($id);

        if (empty($social)) {
            Flash::error(__("messages.404"));

            return redirect(route('socials.index'));
        }

        return view('socials.edit')->with('social', $social);
    }

    /**
     * Update the specified Social in storage.
     *
     * @param int $id
     * @param UpdateSocialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSocialRequest $request)
    {
        $social = $this->socialRepository->find($id);

        if (empty($social)) {
            Flash::error(__("messages.404"));

            return redirect(route('socials.index'));
        }

        $social = $this->socialRepository->update($request->all(), $id);

        Flash::success(__("messages.updated"));

        return redirect(route('socials.index'));
    }

    /**
     * Remove the specified Social from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $social = $this->socialRepository->find($id);

        if (empty($social)) {
            Flash::error(__("messages.404"));

            return redirect(route('socials.index'));
        }

        $this->socialRepository->delete($id);

        Flash::success(__("messages.deleted"));

        return redirect(route('socials.index'));
    }
}
