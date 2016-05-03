<style>
    .tex{
        color: black;
        font-size: 15px;
        width: 57%;
        height: 50%;
        background: none;
        padding: 0px 10px 10px 0px;
	margin-top:-5px;
        float: left;
        font-weight: normal;
        font-family: "Comic Sans MS", cursive, sans-serif;   
        text-align: justify;
    }
    .texD{
        color: black;
        font-size: 15px;
        width: 95%;
        height: 20%;
        background: none;
        padding: 0px 10px 10px 10px;
		margin-top:-5px;
        float: left;
        font-weight: normal;
        font-family: "Comic Sans MS", cursive, sans-serif;  
        text-align: justify;
    }
</style>
<div class="imageS" style=" background: white;height: 780px;padding-top: 3px;">
        <div class="blogA"></div>
            <div id="imageSl">
                <div class="blogS">

    <form id="searchForm" method="post">
        <fieldset>
            <div style="float: left;margin-left: 20px;margin-right: 0px;margin-top:20px;width: 40%;height:100%;">
            <input id="s" type="text" />
            </div>
            <div style="float: right;margin-top:20px;width: 50%;height: 25px;">
                <input type="submit" value="" id="submitButton" style="background: #8C2D00 url(images/search.png) no-repeat center;color: #F0804A;border:1px lightgrey solid;" />                
            </div>
        </fieldset>
    </form>

    <div id="resultsDiv"></div>


                  
                </div>
                <div class="blogB">            
                    <div class="picHeader">
                        What We Will Do For You
                    </div>
                    <div class="pic">
                        <img src="images/art/h1.jpg" height="150" width="250">
                    </div>
                    <div class="tex">
                        <p>Out source Garment Production can be one of the most exciting times of your life but can also be a stressful one. There are many things involved in manufacturing overseas. Once you have identified a design(s) that appeals to you to re-produce in bulk, we ensure your interests are protected and that the process is as easy as possible for you.We will handle all negotiations of the contract to help you attain the best price and terms.</p>
                    </div>
                    <div class="texD">
			<p></p>
                    </div> 
                </div>  
                <div class="blogB">
                    <div class="picHeader">
                        Our Vision And Mission
                    </div>                    
                    <div class="pic">
                        <img src="images/art/h2.png" height="150" width="250">
                    </div>
                    <div class="tex">
<p>With increased globalization of the apparel supply chain, barriers to communication due to geography, language and culture have emerged between the Buyers and the Sellers. It has, thus necessitated the need for the Sourcing Agents to bridge that gap. Our mission is to provide an one-stop platform to ensure delivery of the right product at the right time and with better quality.</p>
					</div>
					<div class="texD">
<p>We, therefore, aim to provide high quality value for money materials through effective communication and monitoring regimes while establishing a successful relationship between all the partners in the global apparel market.</p>
                    </div>                    
                </div>                
            </div>
<script type="text/javascript">
        function googleSearch(settings){

        // If no parameters are supplied to the function,
        // it takes its defaults from the config object above:

        settings = $.extend({},config,settings);
        settings.term = settings.term || $('#s').val();

        if(settings.searchSite){
            // Using the Google site:example.com to limit the search to a
            // specific domain:
            settings.term = 'site:'+settings.siteURL+' '+settings.term;
        }

        // URL of Google's AJAX search API
        var apiURL = 'http://ajax.googleapis.com/ajax/services/search/'+settings.type+
                        '?v=1.0&callback=?';
        var resultsDiv = $('#resultsDiv');

        $.getJSON(apiURL,{
            q	: settings.term,
            rsz	: settings.perPage,
            start	: settings.page*settings.perPage
        },function(r){

            var results = r.responseData.results;
            $('#more').remove();

            if(results.length){

                // If results were returned, add them to a pageContainer div,
                // after which append them to the #resultsDiv:

                var pageContainer = $('<div>',{className:'pageContainer'});

                for(var i=0;i<results.length;i++){
                    // Creating a new result object and firing its toString method:
                    pageContainer.append(new result(results[i]) + '');
                }

                if(!settings.append){
                    // This is executed when running a new search,
                    // instead of clicking on the More button:
                    resultsDiv.empty();
                }

                pageContainer.append('<div class="clear"></div>')
                             .hide().appendTo(resultsDiv)
                             .fadeIn('slow');

                var cursor = r.responseData.cursor;

                // Checking if there are more pages with results,
                // and deciding whether to show the More button:

                if( +cursor.estimatedResultCount > (settings.page+1)*settings.perPage){
                    $('<div>',{id:'more'}).appendTo(resultsDiv).click(function(){
                        googleSearch({append:true,page:settings.page+1});
                        $(this).fadeOut();
                    });
                }
            }
            else {

                // No results were found for this search.

                resultsDiv.empty();
                $('<p>',{
                    className	: 'notFound',
                    html		: 'No Results Were Found!'
                }).hide().appendTo(resultsDiv).fadeIn();
            }
        });
    }
  function result(r){

        // This is class definition. Object of this class are created for
        // each result. The markup is generated by the .toString() method.

        var arr = [];

        // GsearchResultClass is passed by the google API
        switch(r.GsearchResultClass){

            case 'GwebSearch':
                arr = [
                    '<div class="webResult">',
                    '<h2><a href="',r.url,'">',r.title,'</a></h2>',
                    '<p>',r.content,'</p>',
                    '<a href="',r.url,'">',r.visibleUrl,'</a>',
                    '</div>'
                ];
            break;
            case 'GimageSearch':
                arr = [
                    '<div class="imageResult">',
                    '<a href="',r.url,'" title="',r.titleNoFormatting,
                    '" class="pic" style="width:',r.tbWidth,'px;height:',r.tbHeight,'px;">',
                    '<img src="',r.tbUrl,'" width="',r.tbWidth,'" height="',
                    r.tbHeight,'" /></a>','<div class="clear"></div>',
                    '<a href="',r.originalContextUrl,'">',r.visibleUrl,'</a>',
                    '</div>'
                ];
            break;
            case 'GvideoSearch':
                arr = [
                    '<div class="imageResult">',
                    '<a href="',r.url,'" title="',r.titleNoFormatting,'
                    " class="pic" style="width:150px;height:auto;">',
                    '<img src="',r.tbUrl,'" width="100%" /></a>',
                    '<div class="clear"></div>','<a href="',
                    r.originalContextUrl,'">',r.publisher,'</a>',
                    '</div>'
                ];
            break;
            case 'GnewsSearch':
                arr = [
                    '<div class="webResult">',
                    '<h2><a href="',r.unescapedUrl,'">',r.title,'</a></h2>',
                    '<p>',r.content,'</p>',
                    '<a href="',r.unescapedUrl,'">',r.publisher,'</a>',
                    '</div>'
                ];
            break;
        }

        // The toString method.
        this.toString = function(){
            return arr.join('');
        }
    }
});    
</script>