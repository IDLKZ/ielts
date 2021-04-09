<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLogoRequest;
use App\Http\Requests\UpdateLogoRequest;
use App\Models\FileUpload;
use App\Repositories\LogoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LogoController extends AppBaseController
{
    /** @var  LogoRepository */
    private $logoRepository;

    public function __construct(LogoRepository $logoRepo)
    {
        $this->logoRepository = $logoRepo;
    }

    /**
     * Display a listing of the Logo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $logos = $this->logoRepository->all();

        return view('logos.index')
            ->with('logos', $logos);
    }

    /**
     * Show the form for creating a new Logo.
     *
     * @return Response
     */
    public function create()
    {
        return view('logos.create');
    }

    /**
     * Store a newly created Logo in storage.
     *
     * @param CreateLogoRequest $request
     *
     * @return Response
     */
    public function store(CreateLogoRequest $request)
    {
        $input = $request->all();
        $input["img"] = FileUpload::createFile($request,"img","/uploads/logo/",true);
        $logo = $this->logoRepository->create($input);

        Flash::success(__("messages.created"));

        return redirect(route('logos.index'));
    }

    /**
     * Display the specified Logo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $logo = $this->logoRepository->find($id);

        if (empty($logo)) {
            Flash::error(__("messages.404"));

            return redirect(route('logos.index'));
        }

        return view('logos.show')->with('logo', $logo);
    }

    /**
     * Show the form for editing the specified Logo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $logo = $this->logoRepository->find($id);

        if (empty($logo)) {
            Flash::error(__("messages.404"));

            return redirect(route('logos.index'));
        }

        return view('logos.edit')->with('logo', $logo);
    }

    /**
     * Update the specified Logo in storage.
     *
     * @param int $id
     * @param UpdateLogoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLogoRequest $request)
    {
        $logo = $this->logoRepository->find($id);

        if (empty($logo)) {
            Flash::error(__("messages.404"));

            return redirect(route('logos.index'));
        }
        $input = $request->all();
        $input["img"] = FileUpload::updateFile($logo->img,$request,"img","/uploads/logo/",true);
        $logo = $this->logoRepository->update($input, $id);

        Flash::success(__("messages.updated"));

        return redirect(route('logos.index'));
    }

    /**
     * Remove the specified Logo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $logo = $this->logoRepository->find($id);

        if (empty($logo)) {
            Flash::error(__("messages.404"));

            return redirect(route('logos.index'));
        }
        FileUpload::deleteFile($logo->img);
        $this->logoRepository->delete($id);

        Flash::success(__("messages.deleted"));

        return redirect(route('logos.index'));
    }
}
