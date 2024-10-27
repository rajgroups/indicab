<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\page;
use App\Models\service;
use App\Models\location;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; // For file handling
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pages = page::all();
        return view('admin.page.list',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $services = service::where('status','active')->get();
        $locations = location::where('status','active')->get();
        return  view('admin.page.create',compact('services','locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $request->validate([

            // Image Data Validation
            'og_image'                      => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'banner_image'                  => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'side_image'                    => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'feature_image'                 => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',

            // Data Validation
            'seo_title'                     => 'required|string',
            'seo_description'               => 'required|string',
            'seo_keywords'                  => 'required|string',
            'area'                          => 'required|string',
            'city'                          => 'required|string',
            'og_title'                      => 'required|string',
            'og_description'                => 'required|string',
            'first_title'                   => 'required|string',
            'first_description'             => 'required|string',
            'short_tag'                     => 'required|string',
            'sub_category_service'          => 'required|string',
            'service_location'              => 'required|string',
            'price'                         => 'required|string',
            'tesimonial'                    => 'required|string',
            'faq'                           => 'required|string',
            'first_content_title'           => 'required|string',
            'first_content_description'     => 'required|string',
            'content_short_tag'             => 'required|string',
            'name'                          => 'required|string',
            'slug'                          => 'required|unique:tbl_page,slug',
            'service'                       => 'required|string|exists:tbl_service,id',
            'location'                      => 'required|string|exists:tbl_location,id',
            'status'                        => 'required|in:active,inactive',
            'description'                   => 'required|string',
        ]);

        try{
            // DB Start Transection
            DB::beginTransaction();

            // Upload OG Image Image
            $og_image_name = null;
            if($request->hasFile('og_image')){
                $og_image = $request->file('og_image');
                $og_image_name = time() . '_' . $og_image->getClientOriginalName();
                $og_image->move(public_path('og_image/'), $og_image_name); // Save to 'public/uploads'
            }

            //upload Banner Image
            $banner_image_name = null;
            if($request->hasFile('banner_image')){
                $banner_image = $request->file('banner_image');
                $banner_image_name = time() .'_'. $banner_image->getClientOriginalName();
                $banner_image->move(public_path('banner_image/'),$banner_image_name);
            }

            //upload Banner Image
            $side_image_name = null;
            if($request->hasFile('side_image')){
                $side_image = $request->file('side_image');
                $side_image_name = time() .'_'. $side_image->getClientOriginalName();
                $side_image->move(public_path('side_image/'),$side_image_name);
            }

            //upload Banner Image
            $feature_image_name = null;
            if($request->hasFile('feature_image')){
                $feature_image = $request->file('feature_image');
                $feature_image_name = time() .'_'. $feature_image->getClientOriginalName();
                $feature_image->move(public_path('feature_image/'),$feature_image_name);
            }

            // Slug Conersion 
            $slug = Str::slug($request->slug);
            
            // Insert Data to database
            page::create([

                // data insert handling
                'seo_title'                         =>$request->seo_title,
                'seo_description'                   =>$request->seo_description,
                'seo_keywords'                      =>$request->seo_keywords,
                'area'                              =>$request->area,
                'city'                              =>$request->city,
                'og_title'                          =>$request->og_title,
                'og_description'                    =>$request->og_description,
                'first_title'                       =>$request->first_title,
                'first_description'                 =>$request->first_description,
                'short_tag'                         =>$request->short_tag,
                'show_sub_category_service'         =>$request->sub_category_service,
                'show_service_location'             =>$request->service_location,
                'show_price_information	'           =>$request->price,
                'show_testimonial'                  =>$request->tesimonial,
                'show_faq'                          =>$request->faq,
                'first_content_title'               =>$request->first_content_title,
                'first_content_description'         =>$request->first_content_description,
                'content_short_tag'                 =>$request->content_short_tag,
                'slug_name'                         =>$request->name,
                'slug'                              =>$slug,
                'service_id'                        =>$request->service,
                'location_id'                       =>$request->location,
                'status'                            =>$request->status,
                'description'                       =>$request->description,

                // Image Handling
                'og_image'                          =>$og_image_name,
                'banner_image'                      =>$banner_image_name,
                'side_image'                        =>$side_image_name,
                'image'                             =>$feature_image_name,
            ]);

            // Update sitemap.xml
            $sitemap_path = public_path('sitemap.xml');
            // dd('file exist');
            if (File::exists($sitemap_path)) {
              
                $new_url = url('page/' . $slug); // Assuming your page URL is something like /page/{slug}

                // Load the sitemap file and add the new URL
                $sitemap_content = File::get($sitemap_path);
                $new_sitemap_entry = "\n\t<url>\n\t\t<loc>" . $new_url . "</loc>\n\t\t<lastmod>" . now()->toAtomString() . "</lastmod>\n\t</url>\n</urlset>";
                $sitemap_content = str_replace('</urlset>', $new_sitemap_entry, $sitemap_content);

                // Save the updated sitemap
                File::put($sitemap_path, $sitemap_content);

                // dd('file exist');
            }

            // Commit the transaction
            DB::commit();

            // return Succes Message
            return redirect()->back()->with('success','Page Created Successfully');

        }catch (Exception $e){
            DB::rollback();
            return redirect()->back()->withErrors('Error!, Sorry Data  Not Saved. Issue:'.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, page $page)
    {
        try {
            // Start Transaction
            DB::beginTransaction();

            // Find the page by ID (or slug)
            $page = page::findOrFail($id); // Replace $id with the actual identifier

            // Store the old slug to check if the URL needs updating in the sitemap
            $old_slug = $page->slug;

            // Handle file uploads if necessary (similar to your existing code)
            $og_image_name = $page->og_image;
            if ($request->hasFile('og_image')) {
                $og_image = $request->file('og_image');
                $og_image_name = time() . '_' . $og_image->getClientOriginalName();
                $og_image->move(public_path('og_image/'), $og_image_name);
            }

            $banner_image_name = $page->banner_image;
            if ($request->hasFile('banner_image')) {
                $banner_image = $request->file('banner_image');
                $banner_image_name = time() . '_' . $banner_image->getClientOriginalName();
                $banner_image->move(public_path('banner_image/'), $banner_image_name);
            }

            $side_image_name = $page->side_image;
            if ($request->hasFile('side_image')) {
                $side_image = $request->file('side_image');
                $side_image_name = time() . '_' . $side_image->getClientOriginalName();
                $side_image->move(public_path('side_image/'), $side_image_name);
            }

            $feature_image_name = $page->image;
            if ($request->hasFile('feature_image')) {
                $feature_image = $request->file('feature_image');
                $feature_image_name = time() . '_' . $feature_image->getClientOriginalName();
                $feature_image->move(public_path('feature_image/'), $feature_image_name);
            }

            // Update the slug if it changes
            $slug = Str::slug($request->slug);

            // Update the page record in the database
            $page->update([
                'seo_title'                     => $request->seo_title,
                'seo_description'               => $request->seo_description,
                'seo_keywords'                  => $request->seo_keywords,
                'area'                          => $request->area,
                'city'                          => $request->city,
                'og_title'                      => $request->og_title,
                'og_description'                => $request->og_description,
                'first_title'                   => $request->first_title,
                'first_description'             => $request->first_description,
                'short_tag'                     => $request->short_tag,
                'show_sub_category_service'     => $request->sub_category_service,
                'show_service_location'         => $request->service_location,
                'show_price_information'        => $request->price,
                'show_testimonial'              => $request->tesimonial,
                'show_faq'                      => $request->faq,
                'first_content_title'           => $request->first_content_title,
                'first_content_description'     => $request->first_content_description,
                'content_short_tag'             => $request->content_short_tag,
                'slug_name'                     => $request->name,
                'slug'                          => $slug, // Update slug
                'service_id'                    => $request->service,
                'location_id'                   => $request->location,
                'status'                        => $request->status,
                'description'                   => $request->description,
                'og_image'                      => $og_image_name,
                'banner_image'                  => $banner_image_name,
                'side_image'                    => $side_image_name,
                'image'                         => $feature_image_name,
            ]);

            // Commit the transaction
            DB::commit();

            // Update sitemap.xml if the slug (and hence the URL) has changed
            if ($old_slug !== $slug) {
                $sitemap_path = public_path('sitemap.xml');
                if (File::exists($sitemap_path)) {
                    // Old URL and new URL
                    $old_url = url('page/' . $old_slug);
                    $new_url = url('page/' . $slug);

                    // Load the sitemap file
                    $sitemap_content = File::get($sitemap_path);

                    // Define the old sitemap entry and new sitemap entry
                    $old_sitemap_entry = "\n\t<url>\n\t\t<loc>" . $old_url . "</loc>";
                    $new_sitemap_entry = "\n\t<url>\n\t\t<loc>" . $new_url . "</loc>\n\t\t<lastmod>" . now()->toAtomString() . "</lastmod>\n\t</url>";

                    // Check if the old entry exists in the sitemap
                    if (strpos($sitemap_content, $old_sitemap_entry) !== false) {
                        // Replace the old URL with the new URL in the sitemap
                        $sitemap_content = str_replace($old_sitemap_entry, $new_sitemap_entry, $sitemap_content);

                        // Save the updated sitemap
                        File::put($sitemap_path, $sitemap_content);
                    }
                }
            }

            // Return success message
            return redirect()->back()->with('success', 'Page Updated Successfully and Sitemap Updated');

        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors('Error! Page Not Updated. Issue: ' . $e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            // Start Transaction
            DB::beginTransaction();
        
            // Find the page by ID or slug
            $page = page::findOrFail($id); // Replace $id with the actual page identifier
        
            // Store the slug for sitemap removal
            $slug = $page->slug;
        
            // Delete the page record
            $page->delete();
        
            // Commit the transaction
            DB::commit();
        
            // Update sitemap.xml by removing the corresponding URL
            $sitemap_path = public_path('sitemap.xml');
            if (File::exists($sitemap_path)) {
                $page_url = url('page/' . $slug); // Assuming your page URL is something like /page/{slug}
        
                // Load the sitemap file
                $sitemap_content = File::get($sitemap_path);
        
                // Define the sitemap entry for the given page
                $sitemap_entry = "\n\t<url>\n\t\t<loc>" . $page_url . "</loc>";
        
                // Check if the sitemap entry exists
                if (strpos($sitemap_content, $sitemap_entry) !== false) {
                    // Remove the entry from the sitemap
                    $sitemap_content = str_replace($sitemap_entry, '', $sitemap_content);
        
                    // Remove any extra empty lines caused by the deletion
                    $sitemap_content = preg_replace('/\n\s*\n/', "\n", $sitemap_content);
        
                    // Save the updated sitemap
                    File::put($sitemap_path, $sitemap_content);
                }
            }
        
            // Return success message
            return redirect()->back()->with('success', 'Page Deleted Successfully and Sitemap Updated');
        
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors('Error! Page Not Deleted. Issue: ' . $e->getMessage());
        }
    }
}
