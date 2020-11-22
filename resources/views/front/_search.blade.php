<div class="search-area">
  <div class="container">
    <div class="search-wrapper">
      <form action="#">
        <div class="row justify-content-center">
          <div class="col-lg-3 col-sm-5 col-10">
            <div class="search-input">
              <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
              <input type="text"
                     name="keyword"
                     id="keyword"
                     placeholder="Product keyword">
            </div>
          </div>
          <div class="col-lg-3 col-sm-5 col-10">
            <div class="search-input">
              <label for="category"><i class="lni lni-grid-alt theme-color"></i></label>
              <select name="category"
                      id="category">
                <option value="none"
                        selected
                        disabled>Categories
                </option>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-sm-5 col-10">
            <div class="search-input">
              <label for="location"><i class="lni lni-map-marker theme-color"></i></label>
              <select name="location"
                      id="location">
                <option value="none"
                        selected
                        disabled>Locations
                </option>
                @foreach($countries as $country)
                  <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-lg-2 col-sm-5 col-10">
            <div class="search-btn">
              <button class="main-btn btn-hover">Search <i class="lni lni-search-alt"></i></button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
