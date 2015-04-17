<?php
namespace App\Http\Controllers\AdminControllers;

use App\Models\Advertisement;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Routing\Annotations\Annotations\Controller;
use Symfony\Component\Routing\Annotation\Route;
use ZaWeb\Core\Controllers\AbstractAdminController;

/**
 * @Resource("advertisement")
 * @Controller(prefix="/admin")
 * @Middleware("admin")
 */ 
class AdminAdvertisementController extends AbstractAdminController
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Advertisement::orderBy('id', 'desc')->paginate(10);
        return view('admin.advertisement.index', ['ads' => $ads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Advertisement $ad)
    {
        return view('admin.advertisement.create', ['ad' => $ad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Advertisement $ad, AdvertisementRequest $request)
    {
        $attachment = ImageUploadFacade::image($request->file('attachment'));
        $ad->fill($request->all())->attachment()->associate($attachment);
        $ad->save();

        return redirect()->route('admin.advertisement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show(Advertisement $advertisement)
    {
        return view('admin.advertisement.show', ['advertisement' => $advertisement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Advertisement $advertisement)
    {
        return view('admin.advertisement.edit', ['advertisement' => $advertisement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Tags $tags, TagsRequest $request)
    {
        $tags->update($request->input());

        return redirect()->route('admin.advertisement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();
        return redirect()->route('admin.advertisement.index');
    }



}
