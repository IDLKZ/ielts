<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\FileUpload;
use App\Repositories\GalleryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GalleryController extends AppBaseController
{
    /** @var  GalleryRepository */
    private $galleryRepository;

    public function __construct(GalleryRepository $galleryRepo)
    {
        $this->galleryRepository = $galleryRepo;
    }

    /**
     * Display a listing of the Gallery.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $galleries = $this->galleryRepository->all();

        return view('galleries.index')
            ->with('galleries', $galleries);
    }

    /**
     * Show the form for creating a new Gallery.
     *
     * @return Response
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created Gallery in storage.
     *
     * @param CreateGalleryRequest $request
     *
     * @return Response
     */
    public function store(CreateGalleryRequest $request)
    {
        $input = $request->all();
        $input["img"] = FileUpload::createFile($request,"img","/uploads/gallery/",true);
        $gallery = $this->galleryRepository->create($input);

        Flash::success(__("messages.created"));

        return redirect(route('galleries.index'));
    }

    /**
     * Display the specified Gallery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error(__("messages.404"));

            return redirect(route('galleries.index'));
        }

        return view('galleries.show')->with('gallery', $gallery);
    }

    /**
     * Show the form for editing the specified Gallery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error(__("messages.404"));

            return redirect(route('galleries.index'));
        }

        return view('galleries.edit')->with('gallery', $gallery);
    }

    /**
     * Update the specified Gallery in storage.
     *
     * @param int $id
     * @param UpdateGalleryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGalleryRequest $request)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error(__("messages.404"));

            return redirect(route('galleries.index'));
        }
        $input = $request->all();
        $input["img"] = FileUpload::updateFile($gallery->img,$request,"img","/uploads/gallery/",true);
        $gallery = $this->galleryRepository->update($input, $id);

        Flash::success(__("messages.updated"));

        return redirect(route('galleries.index'));
    }

    /**
     * Remove the specified Gallery from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error(__("messages.404"));

            return redirect(route('galleries.index'));
        }
        FileUpload::deleteFile($gallery->img);
        $this->galleryRepository->delete($id);

        Flash::success(__("messages.deleted"));

        return redirect(route('galleries.index'));
    }
}
