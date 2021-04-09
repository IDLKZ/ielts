<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFooterRequest;
use App\Http\Requests\UpdateFooterRequest;
use App\Models\FileUpload;
use App\Repositories\FooterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FooterController extends AppBaseController
{
    /** @var  FooterRepository */
    private $footerRepository;

    public function __construct(FooterRepository $footerRepo)
    {
        $this->footerRepository = $footerRepo;
    }

    /**
     * Display a listing of the Footer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $footers = $this->footerRepository->all();

        return view('footers.index')
            ->with('footers', $footers);
    }

    /**
     * Show the form for creating a new Footer.
     *
     * @return Response
     */
    public function create()
    {
        return view('footers.create');
    }

    /**
     * Store a newly created Footer in storage.
     *
     * @param CreateFooterRequest $request
     *
     * @return Response
     */
    public function store(CreateFooterRequest $request)
    {
        $input = $request->all();
        $input["img"] = FileUpload::createFile($request,"img","/uploads/logo/",true);
        $footer = $this->footerRepository->create($input);

        Flash::success(__("messages.created"));

        return redirect(route('footers.index'));
    }

    /**
     * Display the specified Footer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $footer = $this->footerRepository->find($id);

        if (empty($footer)) {
            Flash::error(__("messages.404"));

            return redirect(route('footers.index'));
        }

        return view('footers.show')->with('footer', $footer);
    }

    /**
     * Show the form for editing the specified Footer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $footer = $this->footerRepository->find($id);

        if (empty($footer)) {
            Flash::error(__("messages.404"));

            return redirect(route('footers.index'));
        }

        return view('footers.edit')->with('footer', $footer);
    }

    /**
     * Update the specified Footer in storage.
     *
     * @param int $id
     * @param UpdateFooterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFooterRequest $request)
    {
        $footer = $this->footerRepository->find($id);

        if (empty($footer)) {
            Flash::error(__("messages.404"));

            return redirect(route('footers.index'));
        }
        $input = $request->all();
        $input["img"] = FileUpload::updateFile($footer->img,$request,"img","/uploads/logo/",true);

        $footer = $this->footerRepository->update($input, $id);

        Flash::success(__("messages.updated"));

        return redirect(route('footers.index'));
    }

    /**
     * Remove the specified Footer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $footer = $this->footerRepository->find($id);

        if (empty($footer)) {
            Flash::error(__("messages.404"));

            return redirect(route('footers.index'));
        }
        FileUpload::deleteFile($footer->img);
        $this->footerRepository->delete($id);

        Flash::success(__("messages.deleted"));

        return redirect(route('footers.index'));
    }
}
