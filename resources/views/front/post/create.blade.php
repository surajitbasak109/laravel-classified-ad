<x-front>
  @include('front._banner')
  <section class="dashboard-area pb-110">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="post-ad-wrapper box-style">
              <div class="title">
                <h3>Post Ad</h3>
              </div>
              <div class="post-ad-form-wrapper">
                <form action="#">
                  <div class="row">
                    <div class="col-xl-7">
                      <div class="left-wrapper pt-50">
                        <h5 class="mb-25">Ad Details</h5>
                        <div class="single-form mb-15">
                          <label for="title" class="mb-1">Title</label>
                          <input
                            type="text"
                            id="title"
                            name="title"
                            placeholder="Title"
                            class="px-3 py-2 mb-0 border rounded"
                          />
                        </div>
                        <div class="single-form mb-15">
                          <label for="category" class="mb-1">Category</label>
                          <select name="category" id="category" class="px-3 py-2 border rounded w-100">
                            <option value="">--SELECT--</option>
                            @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="single-form mb-15">
                          <label for="ad_type">Ad Type</label>
                          <select id="ad_type" name="ad_type" class="px-3 py-2 border rounded w-100">
                            <option value="">--SELECT--</option>
                            <option value="wanted">Wanted Ads</option>
                            <option value="offered">Offered Ads</option>
                          </select>
                        </div>
                        <div class="single-form mb-15">
                          <label for="price" class="mb-1">Price</label>
                          <input
                            type="text"
                            id="price"
                            name="price"
                            placeholder="Price"
                            class="px-3 py-2 mb-0 border rounded"
                          />
                        </div>
                        <div class="single-form mb-15">
                          <label for="description" class="mb-1">Description</label>
                          <textarea
                            name="description"
                            id="description"
                            rows="5"
                            placeholder="Description"
                            class="px-3 py-2 mb-0 border rounded"
                          ></textarea>
                        </div>
                        <div class="single-form">
                          <div class="upload-input">
                            <input type="file" id="upload" name="upload" />
                            <label for="upload" class="text-center content">
                              <span class="text">
                                <span class="d-block mb-15">Drop files anywhere to Upload</span>
                                <span class="d-block mb-15">Or</span>
                                <span class="main-btn btn-hover">Select File</span>
                                <span class="d-block">Maximum upload file size 10Mb</span>
                              </span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-5">
                      <div class="right-wrapper pt-50">
                        <h5 class="mb-25">Contact Details</h5>
                        <div class="single-form mb-15">
                          <label for="f-name" class="mb-1">Name</label>
                          <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Name"
                            class="px-3 py-2 mb-0 border rounded"
                          />
                        </div>
                        <div class="single-form mb-15">
                          <label for="email">Email</label>
                          <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Email"
                            class="px-3 py-2 mb-0 border rounded"
                          />
                        </div>
                        <div class="single-form mb-15">
                          <label for="phone" class="mb-1">Phone*</label>
                          <input
                            type="text"
                            id="phone"
                            name="phone"
                            placeholder="Phone"
                            class="px-3 py-2 mb-0 border rounded"
                          />
                        </div>
                        <div class="single-form mb-15">
                          <label for="address" class="mb-1">Enter Address</label>
                          <input
                            type="text"
                            id="address"
                            name="address"
                            placeholder="Enter Address"
                            class="px-3 py-2 mb-0 border rounded"
                          />
                        </div>
                        <div class="single-form mb-15">
                          <label for="country" class="mb-1">Country</label>
                          <select name="country" id="country" class="form-control form-select px-3 py-2 border rounded w-100">
                            <option value="">--SELECT--</option>
                            @foreach ($countries as $country)
                              <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="single-form mb-15">
                          <label for="state" class="mb-1">State</label>
                          <select name="state" id="state" class="form-control form-select px-3 py-2 border rounded w-100">
                            <option value="">--SELECT--</option>
                          </select>
                        </div>
                        <div class="single-form mb-15">
                          <label for="city" class="mb-1">City</label>
                          <select name="city" id="city" class="form-control form-select px-3 py-2 border rounded w-100">
                            <option value="">--SELECT--</option>
                          </select>
                        </div>
                        <div class="single-form mb-15">
                          <div class="form-check check-style">
                            <input class="form-check-input" type="checkbox" name="agree_to_terms" value="true"
                            id="flexCheckDefault4" required />
                            <label for="flexCheckDefault4">I agree to all Terms of Use & Posting Rules</label>
                          </div>
                        </div>
                        <button class="main-btn btn-hover">Post Ad</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</x-front>
