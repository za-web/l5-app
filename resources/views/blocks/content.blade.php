<div class="col-lg-9 col-md-9 padding_0">
    <!-- begin sort_by  -->
    <div class="sort_by">
        <div class="title">
            <p class="title_text">Sort by:</p>
        </div>
        <ul class="sort_list">
            <li class="sort_items active_sort"><a href="#" class="items_link">Relevance</a></li>
            <li class="sort_items"><a href="#" class="items_link">Date</a></li>
            <li class="sort_items"><a href="#" class="items_link">Sales</a></li>
            <li class="sort_items"><a href="#" class="items_link">Rating</a></li>
            <li class="sort_items"><a href="#" class="items_link">Price</a></li>
            <li class="sort_items"><a href="#" class="items_link">Length</a></li>
            <li class="sort_items"><a href="#" class="items_link">BPM</a></li>
        </ul>
    </div>
    <!-- end sort_by -->
    <!-- begin main_songs  -->
    <div class="main_songs" style="height: 450px;overflow: hidden;">

        <!-- begin song_block  -->
        <div class="song_block" ng-repeat="track in tracks">
            <!-- begin image -->
            <div class="image ">
                <!-- чтобы был значек "new" надо картинку засунуть в div с классом new -->
                <div class="new">
                    <img src="[[ track.IconRef ]]">
                </div>
            </div>
            <!-- end image -->
            <!-- begin info -->
            <div class="info">
                <p class="title strong">[[ track.ItemName ]]</p>
                <p class="text">Category: <span class="category">[[ track.CategoryName ]]</span></p>
                <p class="text">Type: <span class="category">Music</span></p>
                <p class="text">BPM: <span class="bpm">[[ track.BPMText ]]</span></p>
                <p class="text">Duration: <span class="duration">[[ track.DurationText ]]</span></p>

            </div>
            <!-- end info -->
            <!-- begin player  -->
            <div class="player">
                <div class="audiojsZ" ng-class="{playingZ: trackPlayer.playing } ">
                    <audio media-player="trackPlayer" src="[[ track.Mp3Ref ]]" data-playlist="list"></audio>
                    <div class="timeZ">
                        <em class="playedZ" ng-bind="trackPlayer.formatTime"></em>
                        <em class="durationZ">[[ track.DurationText ]]</em>
                    </div><!--/.timeZ-->
                    <div class="scrubberZ">
                        <div class="progressZ"
                             ng-style="{ width: trackPlayer.currentTime*100/trackPlayer.duration + '%' }"
                                ></div>
                        <div class="loadedZ"></div>
                    </div><!--/.scrubberZ-->
                    <div  class="play-pauseZ">
                        <span class="prevZ"></span>
                        <span ng-click="trackPlayer.playPause();" ng-class="{ 'pauseZ': trackPlayer.playing, 'playZ': !trackPlayer.playing} "></span>
                        <span class="nextZ" ng-click="trackPlayer.next()"></span>
                        <span class="loadingZ"></span>
                        <span class="errorZ"></span>
                    </div><!--/.play-pauseZ-->
                    <div class="error-messageZ"></div>
                </div><!--/.audiojsZ-->
            </div>
            <!-- end player -->
            <!-- begin download  -->
            <div class="download">
                <div class="likes">
                    <div class="like"></div>
                    <div class="dislike"></div>
                </div>
                <a href="#" class="download_button">Download</a>
            </div>
            <!-- end download -->
        </div>
        <!-- end song_block -->
    </div>
    <div class="more_view_button"><a style="cursor: pointer;" class="more_view_link">View more results...</a></div>
    <!-- end main_songs -->
</div>