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
                          <div class="form-check check-style">
                            <input class="form-check-input" type="checkbox" value="none" id="flexCheckDefault1" />
                            <label for="flexCheckDefault1">Price On Call</label>
                          </div>
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
                          <div class="d-flex">
                            <div class="form-check check-style">
                              <input class="form-check-input" type="checkbox" value="none" id="flexCheckDefault2" />
                              <label for="flexCheckDefault2">Same User</label>
                            </div>
                            <div class="form-check check-style">
                              <input class="form-check-input" type="checkbox" value="none" id="flexCheckDefault3" />
                              <label for="flexCheckDefault3">Someone Else</label>
                            </div>
                          </div>
                        </div>
                        <div class="single-form mb-15">
                          <label for="f-name" class="mb-1">First Name*</label>
                          <input
                            type="text"
                            id="f-name"
                            name="f-name"
                            placeholder="First Name"
                            class="px-3 py-2 mb-0 border rounded"
                          />
                        </div>
                        <div class="single-form mb-15">
                          <label for="l-name" class="mb-1">Last Name*</label>
                          <input
                            type="text"
                            id="l-name"
                            name="l-name"
                            placeholder="Last Name"
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
                          <label for="address1" class="mb-1">Enter Address (Line one)</label>
                          <input
                            type="text"
                            id="address1"
                            name="address1"
                            placeholder="Enter Address"
                            class="px-3 py-2 mb-0 border rounded"
                          />
                        </div>
                        <div class="single-form mb-15">
                          <label for="address2" class="mb-1">Enter Address</label>
                          <input
                            type="text"
                            id="address2"
                            name="address2"
                            placeholder="Enter Address"
                            class="px-3 py-2 mb-0 border rounded"
                          />
                        </div>
                        <div class="single-form mb-15">
                          <label for="country" class="mb-1">Country</label>
                          <select name="country" id="country" class="px-3 py-2 border rounded w-100">
                            <option value="none">Select state</option>
                            <option value="none">Select state</option>
                            <option value="none">Select state</option>
                            <option value="none">Select state</option>
                          </select>
                        </div>
                        <div class="single-form mb-15">
                          <label for="state" class="mb-1">State</label>
                          <select name="state" id="state" class="px-3 py-2 border rounded w-100">
                            <option value="none">Select state</option>
                            <option value="none">Select state</option>
                            <option value="none">Select state</option>
                            <option value="none">Select state</option>
                          </select>
                        </div>
                        <div class="single-form mb-15">
                          <label for="city" class="mb-1">City</label>
                          <select name="city" id="city" class="px-3 py-2 border rounded w-100">
                            <option value="none">Select state</option>
                            <option value="none">Select state</option>
                            <option value="none">Select state</option>
                            <option value="none">Select state</option>
                          </select>
                        </div>
                        <div class="single-form mb-15">
                          <div class="form-check check-style">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" />
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
    </section><h1>Create New Post</h1>
</x-front>
