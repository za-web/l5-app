<div class="search">
    <div class="search_line">
        <div class="search_line_input">
            <input type="search" class="input_search"  ng-model="text" typeahead="track for track in getAutoComplete($viewValue) | limitTo:8" onchange="this.value = strip_tags(this.value)" placeholder="Keyword, track, name, author, etc.">
        </div>
        <div class="search_line_button"><button class="button_search" ng-click="searchTracks(text)" >search</button></div>
    </div>
    <div class="search_results">
        <h1 class="results_text">Royalty Free <span class="bottom-line">Music</span> in <span class="bottom-line">All</span> Categories</h1>
        <p class="results_numbers"><span>190 758</span> results found</p>
    </div>
</div>