<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIeltsRequest;
use App\Http\Requests\UpdateIeltsRequest;
use App\Models\FileUpload;
use App\Repositories\IeltsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class IeltsController extends AppBaseController
{
    /** @var  IeltsRepository */
    private $ieltsRepository;

    public function __construct(IeltsRepository $ieltsRepo)
    {
        $this->ieltsRepository = $ieltsRepo;
    }

    /**
     * Display a listing of the Ielts.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ielts = $this->ieltsRepository->all();

        return view('ielts.index')
            ->with('ielts', $ielts);
    }

    /**
     * Show the form for creating a new Ielts.
     *
     * @return Response
     */
    public function create()
    {
        return view('ielts.create');
    }

    /**
     * Store a newly created Ielts in storage.
     *
     * @param CreateIeltsRequest $request
     *
     * @return Response
     */
    public function store(CreateIeltsRequest $request)
    {
        $input = $request->all();
        $input["img"] = FileUpload::createFile($request,"img","/uploads/ielts/",true,$request["title"]);
        $ielts = $this->ieltsRepository->create($input);

        Flash::success(__("messages.created"));

        return redirect(route('ielts.index'));
    }

    /**
     * Display the specified Ielts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ielts = $this->ieltsRepository->find($id);

        if (empty($ielts)) {
            Flash::success(__("messages.404"));

            return redirect(route('ielts.index'));
        }

        return view('ielts.show')->with('ielts', $ielts);
    }

    /**
     * Show the form for editing the specified Ielts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ielts = $this->ieltsRepository->find($id);

        if (empty($ielts)) {
            Flash::error(__("messages.404"));

            return redirect(route('ielts.index'));
        }

        return view('ielts.edit')->with('ielts', $ielts);
    }

    /**
     * Update the specified Ielts in storage.
     *
     * @param int $id
     * @param UpdateIeltsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIeltsRequest $request)
    {
        $ielts = $this->ieltsRepository->find($id);

        if (empty($ielts)) {
            Flash::error(__("messages.404"));

            return redirect(route('ielts.index'));
        }
        $input = $request->all();
        $input["img"] = FileUpload::updateFile($ielts->img,$request,"img","/uploads/ielts/",true,$request->title);
        $ielts = $this->ieltsRepository->update($input, $id);

        Flash::success(__("messages.updated"));

        return redirect(route('ielts.index'));
    }

    /**
     * Remove the specified Ielts from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ielts = $this->ieltsRepository->find($id);

        if (empty($ielts)) {
            Flash::error(__("messages.404"));

            return redirect(route('ielts.index'));
        }
        FileUpload::deleteFile($ielts->img);
        $this->ieltsRepository->delete($id);

        Flash::success(__("messages.deleted"));

        return redirect(route('ielts.index'));
    }
}
