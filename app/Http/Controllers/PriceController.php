<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePriceRequest;
use App\Http\Requests\UpdatePriceRequest;
use App\Repositories\PriceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PriceController extends AppBaseController
{
    /** @var  PriceRepository */
    private $priceRepository;

    public function __construct(PriceRepository $priceRepo)
    {
        $this->priceRepository = $priceRepo;
    }

    /**
     * Display a listing of the Price.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $prices = $this->priceRepository->all();
//        foreach ($prices as $price) {
//            dd($price->benefits);
//        }
        return view('prices.index')
            ->with('prices', $prices);
    }

    /**
     * Show the form for creating a new Price.
     *
     * @return Response
     */
    public function create()
    {
        return view('prices.create');
    }

    /**
     * Store a newly created Price in storage.
     *
     * @param CreatePriceRequest $request
     *
     * @return Response
     */
    public function store(CreatePriceRequest $request)
    {
        $input = $request->all();

        $price = $this->priceRepository->create($input);

        Flash::success(__("messages.created"));

        return redirect(route('prices.index'));
    }

    /**
     * Display the specified Price.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $price = $this->priceRepository->find($id);

        if (empty($price)) {
            Flash::error(__("messages.404"));

            return redirect(route('prices.index'));
        }

        return view('prices.show')->with('price', $price);
    }

    /**
     * Show the form for editing the specified Price.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $price = $this->priceRepository->find($id);

        if (empty($price)) {
            Flash::error(__("messages.404"));

            return redirect(route('prices.index'));
        }

        return view('prices.edit')->with('price', $price);
    }

    /**
     * Update the specified Price in storage.
     *
     * @param int $id
     * @param UpdatePriceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePriceRequest $request)
    {
        $price = $this->priceRepository->find($id);

        if (empty($price)) {
            Flash::error(__("messages.404"));

            return redirect(route('prices.index'));
        }

        $price = $this->priceRepository->update($request->all(), $id);

        Flash::success(__("messages.updated"));

        return redirect(route('prices.index'));
    }

    /**
     * Remove the specified Price from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $price = $this->priceRepository->find($id);

        if (empty($price)) {
            Flash::error(__("messages.404"));

            return redirect(route('prices.index'));
        }

        $this->priceRepository->delete($id);

        Flash::success(__("messages.deleted"));

        return redirect(route('prices.index'));
    }
}
