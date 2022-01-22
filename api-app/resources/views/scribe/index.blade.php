<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Aloware Test Project</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://api-app.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.21.0.js") }}"></script>

    <script src="{{ asset("vendor/scribe/js/theme-default-3.21.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-article--post_id-">
                        <a href="#endpoints-GETapi-article--post_id-">GET api/article/{post_id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-article-comments--post_id-">
                        <a href="#endpoints-GETapi-article-comments--post_id-">GET api/article/comments/{post_id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-comment-store--post_id-">
                        <a href="#endpoints-POSTapi-comment-store--post_id-">To Add Comment
To store comment of post you can use this store function</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-reply-store--post_id-">
                        <a href="#endpoints-POSTapi-reply-store--post_id-">POST api/reply/store/{post_id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-documentation">
                        <a href="#endpoints-GETapi-documentation">Display Swagger API page.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-oauth2-callback">
                        <a href="#endpoints-GETapi-oauth2-callback">Display Oauth2 callback pages.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-articles">
                        <a href="#endpoints-GETapi-articles">GET api/articles</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: January 22 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This is a Aloware test project with 5 endpoints</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://api-app.test</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GETapi-article--post_id-">GET api/article/{post_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-article--post_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api-app.test/api/article/qui" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-app.test/api/article/qui"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-article--post_id-">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;The post has been fetched successfully!&quot;,
    &quot;blog&quot;: {
        &quot;id&quot;: 1,
        &quot;title&quot;: &quot;The Basics Of Bird Migration\n&quot;,
        &quot;slug&quot;: &quot;The Basics Of Bird Migration\n&quot;,
        &quot;content&quot;: &quot;        &lt;p class=\&quot;text-justify\&quot;&gt;\n          Geese winging their way south in wrinkled V-shaped flocks is perhaps the classic picture of\n          migration&mdash;the annual, large-scale movement of birds between their breeding (summer) homes and their\n          nonbreeding (winter) grounds. But geese are far from our only migratory birds. Of the more than 650\n          species of North American breeding birds, more than half are migratory.\n        &lt;/p&gt;\n        &lt;div class=\&quot;text-h6 text-weight-medium\&quot;&gt;Why Do Birds Migrate?&lt;/div&gt;\n        &lt;p class=\&quot;text-justify\&quot;&gt;\n          Birds migrate to move from areas of low or decreasing resources to areas of high or increasing\n          resources. The two primary resources being sought are food and nesting locations. Here&rsquo;s more about\n          how migration evolved.\n\n          Birds that nest in the Northern Hemisphere tend to migrate northward in the spring to take advantage\n          of burgeoning insect populations, budding plants and an abundance of nesting locations. As winter\n          approaches and the availability of insects and other food drops, the birds move south again.\n          Escaping the cold is a motivating factor but many species, including hummingbirds, can withstand\n          freezing temperatures as long as an adequate supply of food is available.\n        &lt;/p&gt;\n        &lt;div class=\&quot;text-h6 text-weight-medium\&quot;&gt;Origins Of Long-Distance Migration&lt;/div&gt;\n        &lt;p class=\&quot;text-justify\&quot;&gt;\n          While short-distance migration probably developed from a fairly simple need for food, the origins of\n          long-distant migration patterns are much more complex. They&rsquo;ve evolved over thousands of years and\n          are controlled at least partially by the genetic makeup of the birds. They also incorporate\n          responses to weather, geography, food sources, day length, and other factors.\n        &lt;/p&gt;\n        &lt;p class=\&quot;text-justify\&quot;&gt;\n          For birds that winter in the tropics, it seems strange to imagine leaving home and embarking on a\n          migration north. Why make such an arduous trip north in spring? One idea is that through many\n          generations the tropical ancestors of these birds dispersed from their tropical breeding sites\n          northward. The seasonal abundance of insect food and greater day length allowed them to raise more\n          young (4&ndash;6 on average) than their stay-at-home tropical relatives (2&ndash;3 on average). As their\n          breeding zones moved north during periods of glacial retreat, the birds continued to return to their\n          tropical homes as winter weather and declining food supplies made life more difficult. Supporting\n          this theory is the fact that most North American vireos, flycatchers, tanagers, warblers, orioles,\n          and swallows have evolved from forms that originated in the tropics.\n        &lt;/p&gt;&quot;,
        &quot;cover&quot;: &quot;andy-li-r2AlgxMb-yc-unsplash.jpg&quot;,
        &quot;likes&quot;: 0,
        &quot;views&quot;: 0,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-article--post_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-article--post_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-article--post_id-"></code></pre>
</span>
<span id="execution-error-GETapi-article--post_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-article--post_id-"></code></pre>
</span>
<form id="form-GETapi-article--post_id-" data-method="GET"
      data-path="api/article/{post_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-article--post_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-article--post_id-"
                    onclick="tryItOut('GETapi-article--post_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-article--post_id-"
                    onclick="cancelTryOut('GETapi-article--post_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-article--post_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/article/{post_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>post_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="post_id"
               data-endpoint="GETapi-article--post_id-"
               value="qui"
               data-component="url" hidden>
    <br>
<p>The ID of the post.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-article-comments--post_id-">GET api/article/comments/{post_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-article-comments--post_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api-app.test/api/article/comments/20" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-app.test/api/article/comments/20"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-article-comments--post_id-">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Comments fetched successfully!&quot;,
    &quot;comments&quot;: [
        {
            &quot;id&quot;: 69,
            &quot;user_id&quot;: 1,
            &quot;parent_id&quot;: 0,
            &quot;comment&quot;: &quot;Is this post 1?&quot;,
            &quot;commentable_id&quot;: 1,
            &quot;commentable_type&quot;: &quot;post&quot;,
            &quot;created_at&quot;: &quot;2022-01-22T18:32:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T18:32:16.000000Z&quot;,
            &quot;replies&quot;: [],
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;nima&quot;
            }
        },
        {
            &quot;id&quot;: 67,
            &quot;user_id&quot;: 1,
            &quot;parent_id&quot;: 0,
            &quot;comment&quot;: &quot;Add new Comment&quot;,
            &quot;commentable_id&quot;: 1,
            &quot;commentable_type&quot;: &quot;post&quot;,
            &quot;created_at&quot;: &quot;2022-01-22T18:19:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T18:19:36.000000Z&quot;,
            &quot;replies&quot;: [
                {
                    &quot;id&quot;: 68,
                    &quot;user_id&quot;: 1,
                    &quot;parent_id&quot;: 67,
                    &quot;comment&quot;: &quot;add new reply&quot;,
                    &quot;commentable_id&quot;: 67,
                    &quot;commentable_type&quot;: &quot;comment&quot;,
                    &quot;created_at&quot;: &quot;2022-01-22T18:19:48.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-22T18:19:48.000000Z&quot;,
                    &quot;user&quot;: {
                        &quot;id&quot;: 1,
                        &quot;name&quot;: &quot;nima&quot;
                    },
                    &quot;replies&quot;: []
                }
            ],
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;nima&quot;
            }
        },
        {
            &quot;id&quot;: 37,
            &quot;user_id&quot;: 1,
            &quot;parent_id&quot;: 0,
            &quot;comment&quot;: &quot;Hello, this awesome post&quot;,
            &quot;commentable_id&quot;: 1,
            &quot;commentable_type&quot;: &quot;post&quot;,
            &quot;created_at&quot;: &quot;2022-01-22T14:35:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T14:35:40.000000Z&quot;,
            &quot;replies&quot;: [
                {
                    &quot;id&quot;: 65,
                    &quot;user_id&quot;: 1,
                    &quot;parent_id&quot;: 37,
                    &quot;comment&quot;: &quot;this reply reply test&quot;,
                    &quot;commentable_id&quot;: 37,
                    &quot;commentable_type&quot;: &quot;comment&quot;,
                    &quot;created_at&quot;: &quot;2022-01-22T17:37:49.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-22T17:37:49.000000Z&quot;,
                    &quot;user&quot;: {
                        &quot;id&quot;: 1,
                        &quot;name&quot;: &quot;nima&quot;
                    },
                    &quot;replies&quot;: []
                },
                {
                    &quot;id&quot;: 64,
                    &quot;user_id&quot;: 1,
                    &quot;parent_id&quot;: 37,
                    &quot;comment&quot;: &quot;this is reply test&quot;,
                    &quot;commentable_id&quot;: 37,
                    &quot;commentable_type&quot;: &quot;comment&quot;,
                    &quot;created_at&quot;: &quot;2022-01-22T17:37:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-22T17:37:11.000000Z&quot;,
                    &quot;user&quot;: {
                        &quot;id&quot;: 1,
                        &quot;name&quot;: &quot;nima&quot;
                    },
                    &quot;replies&quot;: [
                        {
                            &quot;id&quot;: 66,
                            &quot;user_id&quot;: 1,
                            &quot;parent_id&quot;: 64,
                            &quot;comment&quot;: &quot;reply of reply&quot;,
                            &quot;commentable_id&quot;: 64,
                            &quot;commentable_type&quot;: &quot;comment&quot;,
                            &quot;created_at&quot;: &quot;2022-01-22T18:01:50.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2022-01-22T18:01:50.000000Z&quot;,
                            &quot;user&quot;: {
                                &quot;id&quot;: 1,
                                &quot;name&quot;: &quot;nima&quot;
                            },
                            &quot;replies&quot;: []
                        }
                    ]
                }
            ],
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;nima&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-article-comments--post_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-article-comments--post_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-article-comments--post_id-"></code></pre>
</span>
<span id="execution-error-GETapi-article-comments--post_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-article-comments--post_id-"></code></pre>
</span>
<form id="form-GETapi-article-comments--post_id-" data-method="GET"
      data-path="api/article/comments/{post_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-article-comments--post_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-article-comments--post_id-"
                    onclick="tryItOut('GETapi-article-comments--post_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-article-comments--post_id-"
                    onclick="cancelTryOut('GETapi-article-comments--post_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-article-comments--post_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/article/comments/{post_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="post_id"
               data-endpoint="GETapi-article-comments--post_id-"
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the post.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-comment-store--post_id-">To Add Comment
To store comment of post you can use this store function</h2>

<p>
</p>



<span id="example-requests-POSTapi-comment-store--post_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api-app.test/api/comment/store/odit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-app.test/api/comment/store/odit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-comment-store--post_id-">
</span>
<span id="execution-results-POSTapi-comment-store--post_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-comment-store--post_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-comment-store--post_id-"></code></pre>
</span>
<span id="execution-error-POSTapi-comment-store--post_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-comment-store--post_id-"></code></pre>
</span>
<form id="form-POSTapi-comment-store--post_id-" data-method="POST"
      data-path="api/comment/store/{post_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-comment-store--post_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-comment-store--post_id-"
                    onclick="tryItOut('POSTapi-comment-store--post_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-comment-store--post_id-"
                    onclick="cancelTryOut('POSTapi-comment-store--post_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-comment-store--post_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/comment/store/{post_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>post_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="post_id"
               data-endpoint="POSTapi-comment-store--post_id-"
               value="odit"
               data-component="url" hidden>
    <br>
<p>The ID of the post.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-reply-store--post_id-">POST api/reply/store/{post_id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-reply-store--post_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api-app.test/api/reply/store/et" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-app.test/api/reply/store/et"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-reply-store--post_id-">
</span>
<span id="execution-results-POSTapi-reply-store--post_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-reply-store--post_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reply-store--post_id-"></code></pre>
</span>
<span id="execution-error-POSTapi-reply-store--post_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reply-store--post_id-"></code></pre>
</span>
<form id="form-POSTapi-reply-store--post_id-" data-method="POST"
      data-path="api/reply/store/{post_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-reply-store--post_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-reply-store--post_id-"
                    onclick="tryItOut('POSTapi-reply-store--post_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-reply-store--post_id-"
                    onclick="cancelTryOut('POSTapi-reply-store--post_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-reply-store--post_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/reply/store/{post_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>post_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="post_id"
               data-endpoint="POSTapi-reply-store--post_id-"
               value="et"
               data-component="url" hidden>
    <br>
<p>The ID of the post.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-documentation">Display Swagger API page.</h2>

<p>
</p>



<span id="example-requests-GETapi-documentation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api-app.test/api/documentation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-app.test/api/documentation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-documentation">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">&lt;!-- HTML for static distribution bundle build --&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
  &lt;meta charset=&quot;UTF-8&quot;&gt;
  &lt;title&gt;L5 Swagger UI&lt;/title&gt;
  &lt;link href=&quot;https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700&quot; rel=&quot;stylesheet&quot;&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://api-app.test/docs/asset/swagger-ui.css?v=b47dcdb59251cf1254ee38395c18b5b9&quot; &gt;
  &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;http://api-app.test/docs/asset/favicon-32x32.png?v=40d4f2c38d1cd854ad463f16373cbcb6&quot; sizes=&quot;32x32&quot; /&gt;
  &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;http://api-app.test/docs/asset/favicon-16x16.png?v=f0ae831196d55d8f4115b6c5e8ec5384&quot; sizes=&quot;16x16&quot; /&gt;
  &lt;style&gt;
    html
    {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
    }
    *,
    *:before,
    *:after
    {
        box-sizing: inherit;
    }

    body {
      margin:0;
      background: #fafafa;
    }
  &lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;

&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;http://www.w3.org/1999/xlink&quot; style=&quot;position:absolute;width:0;height:0&quot;&gt;
  &lt;defs&gt;
    &lt;symbol viewBox=&quot;0 0 20 20&quot; id=&quot;unlocked&quot;&gt;
          &lt;path d=&quot;M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z&quot;&gt;&lt;/path&gt;
    &lt;/symbol&gt;

    &lt;symbol viewBox=&quot;0 0 20 20&quot; id=&quot;locked&quot;&gt;
      &lt;path d=&quot;M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z&quot;/&gt;
    &lt;/symbol&gt;

    &lt;symbol viewBox=&quot;0 0 20 20&quot; id=&quot;close&quot;&gt;
      &lt;path d=&quot;M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z&quot;/&gt;
    &lt;/symbol&gt;

    &lt;symbol viewBox=&quot;0 0 20 20&quot; id=&quot;large-arrow&quot;&gt;
      &lt;path d=&quot;M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z&quot;/&gt;
    &lt;/symbol&gt;

    &lt;symbol viewBox=&quot;0 0 20 20&quot; id=&quot;large-arrow-down&quot;&gt;
      &lt;path d=&quot;M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z&quot;/&gt;
    &lt;/symbol&gt;


    &lt;symbol viewBox=&quot;0 0 24 24&quot; id=&quot;jump-to&quot;&gt;
      &lt;path d=&quot;M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z&quot;/&gt;
    &lt;/symbol&gt;

    &lt;symbol viewBox=&quot;0 0 24 24&quot; id=&quot;expand&quot;&gt;
      &lt;path d=&quot;M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z&quot;/&gt;
    &lt;/symbol&gt;

  &lt;/defs&gt;
&lt;/svg&gt;

&lt;div id=&quot;swagger-ui&quot;&gt;&lt;/div&gt;

&lt;script src=&quot;http://api-app.test/docs/asset/swagger-ui-bundle.js?v=798d369d6387e66b7278e63cb950a32f&quot;&gt; &lt;/script&gt;
&lt;script src=&quot;http://api-app.test/docs/asset/swagger-ui-standalone-preset.js?v=e3a4b013757e84ad70d1ef12270ba31a&quot;&gt; &lt;/script&gt;
&lt;script&gt;
window.onload = function() {
  // Build a system
  const ui = SwaggerUIBundle({
    dom_id: &#039;#swagger-ui&#039;,

    url: &quot;http://api-app.test/docs/api-docs.json&quot;,
    operationsSorter: null,
    configUrl: null,
    validatorUrl: null,
    oauth2RedirectUrl: &quot;http://api-app.test/api/oauth2-callback&quot;,

    requestInterceptor: function(request) {
      request.headers[&#039;X-CSRF-TOKEN&#039;] = &#039;&#039;;
      return request;
    },

    presets: [
      SwaggerUIBundle.presets.apis,
      SwaggerUIStandalonePreset
    ],

    plugins: [
      SwaggerUIBundle.plugins.DownloadUrl
    ],

    layout: &quot;StandaloneLayout&quot;,
    docExpansion : &quot;none&quot;,
    filter: true,
    persistAuthorization: &quot;false&quot;,

    })

  window.ui = ui
}
&lt;/script&gt;
&lt;/body&gt;

&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-documentation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-documentation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-documentation"></code></pre>
</span>
<span id="execution-error-GETapi-documentation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-documentation"></code></pre>
</span>
<form id="form-GETapi-documentation" data-method="GET"
      data-path="api/documentation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-documentation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-documentation"
                    onclick="tryItOut('GETapi-documentation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-documentation"
                    onclick="cancelTryOut('GETapi-documentation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-documentation" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/documentation</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-oauth2-callback">Display Oauth2 callback pages.</h2>

<p>
</p>



<span id="example-requests-GETapi-oauth2-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api-app.test/api/oauth2-callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-app.test/api/oauth2-callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-oauth2-callback">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">&lt;!doctype html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
&lt;head&gt;
    &lt;title&gt;Swagger UI: OAuth2 Redirect&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
    &#039;use strict&#039;;
    function run () {
        var oauth2 = window.opener.swaggerUIRedirectOauth2;
        var sentState = oauth2.state;
        var redirectUrl = oauth2.redirectUrl;
        var isValid, qp, arr;

        if (/code|token|error/.test(window.location.hash)) {
            qp = window.location.hash.substring(1);
        } else {
            qp = location.search.substring(1);
        }

        arr = qp.split(&quot;&amp;&quot;);
        arr.forEach(function (v,i,_arr) { _arr[i] = &#039;&quot;&#039; + v.replace(&#039;=&#039;, &#039;&quot;:&quot;&#039;) + &#039;&quot;&#039;;});
        qp = qp ? JSON.parse(&#039;{&#039; + arr.join() + &#039;}&#039;,
                function (key, value) {
                    return key === &quot;&quot; ? value : decodeURIComponent(value);
                }
        ) : {};

        isValid = qp.state === sentState;

        if ((
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;accessCode&quot; ||
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;authorizationCode&quot; ||
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;authorization_code&quot;
        ) &amp;&amp; !oauth2.auth.code) {
            if (!isValid) {
                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: &quot;auth&quot;,
                    level: &quot;warning&quot;,
                    message: &quot;Authorization may be unsafe, passed state was changed in server Passed state wasn&#039;t returned from auth server&quot;
                });
            }

            if (qp.code) {
                delete oauth2.state;
                oauth2.auth.code = qp.code;
                oauth2.callback({auth: oauth2.auth, redirectUrl: redirectUrl});
            } else {
                let oauthErrorMsg;
                if (qp.error) {
                    oauthErrorMsg = &quot;[&quot;+qp.error+&quot;]: &quot; +
                        (qp.error_description ? qp.error_description+ &quot;. &quot; : &quot;no accessCode received from the server. &quot;) +
                        (qp.error_uri ? &quot;More info: &quot;+qp.error_uri : &quot;&quot;);
                }

                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: &quot;auth&quot;,
                    level: &quot;error&quot;,
                    message: oauthErrorMsg || &quot;[Authorization failed]: no accessCode received from the server&quot;
                });
            }
        } else {
            oauth2.callback({auth: oauth2.auth, token: qp, isValid: isValid, redirectUrl: redirectUrl});
        }
        window.close();
    }

    window.addEventListener(&#039;DOMContentLoaded&#039;, function () {
      run();
    });
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-oauth2-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"></code></pre>
</span>
<span id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback"></code></pre>
</span>
<form id="form-GETapi-oauth2-callback" data-method="GET"
      data-path="api/oauth2-callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-oauth2-callback"
                    onclick="tryItOut('GETapi-oauth2-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-oauth2-callback"
                    onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-oauth2-callback" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/oauth2-callback</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-articles">GET api/articles</h2>

<p>
</p>



<span id="example-requests-GETapi-articles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api-app.test/api/articles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-app.test/api/articles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-articles">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Articles fetched successfully!&quot;,
    &quot;blogs&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;The Basics Of Bird Migration\n&quot;,
            &quot;slug&quot;: &quot;The Basics Of Bird Migration\n&quot;,
            &quot;content&quot;: &quot;        &lt;p class=\&quot;text-justify\&quot;&gt;\n          Geese winging their way south in wrinkled V-shaped flocks is perhaps the classic picture of\n          migration&mdash;the annual, large-scale movement of birds between their breeding (summer) homes and their\n          nonbreeding (winter) grounds. But geese are far from our only migratory birds. Of the more than 650\n          species of North American breeding birds, more than half are migratory.\n        &lt;/p&gt;\n        &lt;div class=\&quot;text-h6 text-weight-medium\&quot;&gt;Why Do Birds Migrate?&lt;/div&gt;\n        &lt;p class=\&quot;text-justify\&quot;&gt;\n          Birds migrate to move from areas of low or decreasing resources to areas of high or increasing\n          resources. The two primary resources being sought are food and nesting locations. Here&rsquo;s more about\n          how migration evolved.\n\n          Birds that nest in the Northern Hemisphere tend to migrate northward in the spring to take advantage\n          of burgeoning insect populations, budding plants and an abundance of nesting locations. As winter\n          approaches and the availability of insects and other food drops, the birds move south again.\n          Escaping the cold is a motivating factor but many species, including hummingbirds, can withstand\n          freezing temperatures as long as an adequate supply of food is available.\n        &lt;/p&gt;\n        &lt;div class=\&quot;text-h6 text-weight-medium\&quot;&gt;Origins Of Long-Distance Migration&lt;/div&gt;\n        &lt;p class=\&quot;text-justify\&quot;&gt;\n          While short-distance migration probably developed from a fairly simple need for food, the origins of\n          long-distant migration patterns are much more complex. They&rsquo;ve evolved over thousands of years and\n          are controlled at least partially by the genetic makeup of the birds. They also incorporate\n          responses to weather, geography, food sources, day length, and other factors.\n        &lt;/p&gt;\n        &lt;p class=\&quot;text-justify\&quot;&gt;\n          For birds that winter in the tropics, it seems strange to imagine leaving home and embarking on a\n          migration north. Why make such an arduous trip north in spring? One idea is that through many\n          generations the tropical ancestors of these birds dispersed from their tropical breeding sites\n          northward. The seasonal abundance of insect food and greater day length allowed them to raise more\n          young (4&ndash;6 on average) than their stay-at-home tropical relatives (2&ndash;3 on average). As their\n          breeding zones moved north during periods of glacial retreat, the birds continued to return to their\n          tropical homes as winter weather and declining food supplies made life more difficult. Supporting\n          this theory is the fact that most North American vireos, flycatchers, tanagers, warblers, orioles,\n          and swallows have evolved from forms that originated in the tropics.\n        &lt;/p&gt;&quot;,
            &quot;cover&quot;: &quot;andy-li-r2AlgxMb-yc-unsplash.jpg&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;OEq3fiVZ9P&quot;,
            &quot;slug&quot;: &quot;efwc49LQkd&quot;,
            &quot;content&quot;: &quot;Eum consequatur ullam nihil asperiores qui provident id debitis. Harum molestias ea nam vel accusamus dignissimos harum. Qui aperiam expedita exercitationem consequatur voluptatem. Et laboriosam dicta veniam.\n\nUt illum animi et voluptas. Perferendis aperiam sed accusamus cupiditate aliquid. Et ullam dolorum sint magni aut eos doloremque illum.\n\nAmet error dolorum ducimus impedit. Dolorem eos qui non minus excepturi. Quo eveniet dolorum fugit quo autem et aut. Ipsa quod voluptatem voluptatem blanditiis optio magni.\n\nAd magnam expedita voluptas nam. Commodi eos animi eius est tempora. Et ipsam quisquam quam aspernatur vel minus voluptatem. Tempore maiores eum ut sed ut nostrum.\n\nFugit et tempore unde. Et dolores ipsum aliquid quod tempora ducimus. Illum voluptas quaerat ad consequatur odit.&quot;,
            &quot;cover&quot;: &quot;/tmp/04b97ba2ea85c59543793300bae41b63.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:23:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:23:28.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;title&quot;: &quot;Oe8fyv7mjt&quot;,
            &quot;slug&quot;: &quot;uiTCNtLkyk&quot;,
            &quot;content&quot;: &quot;Eum eaque porro cumque voluptatibus. Enim eum ut ut excepturi. Qui repellendus consequuntur molestiae dignissimos consectetur. Nostrum et sed nulla odio aut dicta libero. Hic ex facilis quia dolorem vel quod cumque expedita.\n\nQui sed ipsum omnis id quia non sed. Ea dolores quae temporibus in enim placeat. Numquam debitis eligendi modi at quaerat. Est eum eius natus rerum.\n\nCumque cumque quibusdam officiis voluptates. Architecto maxime voluptatibus ut et dolorem similique. Eius at aut quasi ut et voluptas dolorem vitae.\n\nEum voluptates sint similique tempora culpa tempora voluptatum. Voluptatum expedita at ullam qui voluptatem quia alias. Nam deserunt nihil qui molestiae voluptates aliquid qui ut.\n\nCorporis laudantium sequi cum vel sunt. Suscipit aperiam et iure ea sequi beatae vitae. Aspernatur porro quo atque quo unde animi quo.&quot;,
            &quot;cover&quot;: &quot;/tmp/ce89ed481eeb83b6dd5c925c98653f84.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:30:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:30:46.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;title&quot;: &quot;ycByFe6UNv&quot;,
            &quot;slug&quot;: &quot;VCzWb80gBC&quot;,
            &quot;content&quot;: &quot;Accusantium laudantium ab magnam esse sit. Et praesentium inventore ut vero aspernatur suscipit.\n\nFugiat quo expedita itaque earum ea. Nisi cupiditate natus architecto dolor aut dicta qui. Nisi at quia non maxime harum nostrum. Magnam libero voluptatem cupiditate animi sunt molestiae.\n\nMagnam amet omnis rerum necessitatibus omnis ipsum. Saepe rem explicabo qui sed. Pariatur ut nesciunt corrupti dolorem. Quam illum et et veritatis voluptas non.\n\nAut nihil aut dicta. Placeat esse voluptatem officiis illo rerum dolores reiciendis rem. Aliquam ducimus perspiciatis aut suscipit.\n\nCum labore mollitia rem eius eveniet accusamus voluptate. Nulla sint eos cumque natus voluptatem dolorum. Assumenda nesciunt sapiente animi facilis dolor. Optio sed eos repellendus dolore qui iure quia.&quot;,
            &quot;cover&quot;: &quot;/tmp/771f3f5938c24770da24809d7e2eba6e.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:31:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:31:34.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;FcF2TrwMcB&quot;,
            &quot;slug&quot;: &quot;XhPURwghE6&quot;,
            &quot;content&quot;: &quot;Praesentium corporis ea aut dolorem impedit. Accusamus ducimus dolor nisi aut laboriosam. Autem nihil id laborum tempora.\n\nQuae cum aut voluptas praesentium repellendus natus nam. Et at vitae perferendis placeat temporibus in. Aut ratione aut eveniet quidem.\n\nIllo vel aperiam nam accusantium optio molestiae est. Et tenetur fuga minima nisi voluptatem sed. Commodi eum ut quaerat necessitatibus et rerum.\n\nSint vel nisi facere praesentium. Maxime quam perferendis praesentium aliquid. Nostrum sunt nisi et necessitatibus quas.\n\nAccusamus enim et id repudiandae error architecto consectetur. Nesciunt nam cumque magni laudantium animi. Est dolorem dolorum ullam asperiores quo deserunt vel. Rem laboriosam soluta totam impedit est voluptatem quo.&quot;,
            &quot;cover&quot;: &quot;/tmp/9e0573110a24a47c46f29fe92efc1f7f.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:31:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:31:52.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;title&quot;: &quot;l37nfh8uIy&quot;,
            &quot;slug&quot;: &quot;N1tDOjcY7i&quot;,
            &quot;content&quot;: &quot;Quis modi et rem quod qui numquam sint sint. Ea numquam et iusto necessitatibus. Sunt suscipit vel magnam quidem. Sed et a ipsa porro quasi.\n\nQuis voluptatum accusantium provident dolor blanditiis. Et ipsa dolores recusandae recusandae aliquam sint. Numquam nihil aliquid esse omnis ex excepturi rerum. Expedita a molestias vel voluptatem ut.\n\nVelit doloremque magnam animi deleniti quo in non. In eos at dignissimos repellendus ut. Sit ea dolorem saepe et iste.\n\nSunt minima sint unde delectus. Odit et repellat corrupti consequatur necessitatibus accusantium. Ratione voluptatem enim in repudiandae possimus.\n\nTempora vel est eaque ea unde. Rerum repellat pariatur explicabo aut. Sit et dolores et saepe omnis similique qui. Recusandae doloribus et totam sint aut debitis.&quot;,
            &quot;cover&quot;: &quot;/tmp/fa7858540d0eed0f2a711f42238d4934.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:41:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:41:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;title&quot;: &quot;DGPwNJGtF9&quot;,
            &quot;slug&quot;: &quot;3CCJuEboQ5&quot;,
            &quot;content&quot;: &quot;Pariatur suscipit error dolor eligendi sunt distinctio. Voluptatem eum provident inventore repellat. Suscipit exercitationem dolorem perspiciatis sapiente. Quo sed impedit error optio consequatur.\n\nAsperiores praesentium inventore deleniti soluta. Accusamus id id expedita. Molestias quo sunt et qui qui impedit. Sint possimus dolor necessitatibus quia nisi.\n\nSunt magni esse et nulla modi facere. Architecto sed reprehenderit error et vel. Dolor ipsum dolorem enim iusto excepturi. Ducimus laboriosam minima autem.\n\nUt sequi nemo velit dolorum nihil ab dolorem reiciendis. Aliquam aut eligendi voluptatibus et vero consequatur quisquam ipsa. Deleniti incidunt harum alias.\n\nQui consequatur quidem et iusto nesciunt voluptatibus. Omnis voluptatibus et rerum amet. Dignissimos ipsum quia qui soluta deleniti. Dolor doloremque ab voluptates et in aut qui minus.&quot;,
            &quot;cover&quot;: &quot;/tmp/3e7cc96e6c2db8d7a81af5a5462bcbcb.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:42:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:42:28.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;title&quot;: &quot;P2xBS7pW9Q&quot;,
            &quot;slug&quot;: &quot;Ur8zNTFKSq&quot;,
            &quot;content&quot;: &quot;Consequatur hic fuga qui beatae iure necessitatibus sed ratione. Omnis sint et distinctio nobis aut quod.\n\nSint laboriosam blanditiis qui id quae repellat. Ea fugiat facere praesentium rerum dolorem dolorum doloribus dolores. Consequuntur dicta rerum dicta doloribus. Eum quia labore a blanditiis illum.\n\nModi est repellat eum ipsum eos. Molestiae veniam modi vel laboriosam iure qui quis. Eum vitae perspiciatis odit molestias.\n\nAutem praesentium non beatae assumenda. Voluptatem et ratione rem id. Delectus at in voluptas eum enim porro.\n\nEveniet iste saepe est et in. Nisi atque ex eum dolorem natus non amet. Nihil id sit quibusdam aut natus dolores corporis unde.&quot;,
            &quot;cover&quot;: &quot;/tmp/e330a17ec94644b48fc062f1376d1864.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:42:39.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:42:39.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;title&quot;: &quot;5nuzQnp9bm&quot;,
            &quot;slug&quot;: &quot;35IakY7XTG&quot;,
            &quot;content&quot;: &quot;Non saepe nulla sit velit explicabo. Rem et autem adipisci voluptatibus voluptatum ipsam et. Numquam quam sed quas vel nulla sit incidunt. Vero iure harum quibusdam autem non delectus voluptate.\n\nDebitis et ut animi est. Soluta aliquam est culpa. Eum ea accusamus veritatis maiores soluta omnis. Eos nihil harum labore excepturi ipsa.\n\nEt dignissimos voluptatem omnis deleniti dolorum laboriosam. Qui nam ipsum fugiat. Sint eaque debitis cupiditate ipsa qui cupiditate. Non blanditiis aut id sit corrupti ipsa provident.\n\nExpedita est qui quam tenetur rerum sed eligendi et. Velit quidem officia officiis et beatae et cumque non. Deserunt nobis facere autem ducimus.\n\nSit aliquid perferendis aut eos doloremque temporibus doloribus. Voluptatem dolore quaerat labore eum sed. Qui aperiam dolores officiis. Sed a placeat molestias nihil exercitationem hic placeat eaque. Totam laudantium consectetur voluptas dolor officiis repellendus.&quot;,
            &quot;cover&quot;: &quot;0&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:43:45.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:43:45.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;title&quot;: &quot;o4phQuXqmH&quot;,
            &quot;slug&quot;: &quot;XqAKaF4qvM&quot;,
            &quot;content&quot;: &quot;Facilis expedita at pariatur doloribus nam possimus. Fugiat et quae voluptatem et accusantium accusamus.\n\nLaudantium vel corporis enim rerum cumque. Sunt cumque et cupiditate non. Voluptates sapiente id vitae et.\n\nVel nemo cumque consectetur officiis nobis nulla. Inventore maiores ea aut rerum magnam. Cum minima voluptatem quaerat voluptates. Ullam omnis quisquam non quas quisquam iure suscipit.\n\nEt ea magni incidunt dolore quasi. Ut rerum atque deleniti. Dolor aliquid harum eum cum qui. Eius ullam minus id modi.\n\nQuod maiores ipsam accusamus ratione vitae. Non est aspernatur recusandae et. Debitis labore sit eius voluptatum dolor alias. Ut ea qui sit.&quot;,
            &quot;cover&quot;: &quot;0&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:44:32.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:44:32.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;title&quot;: &quot;2NdGHMlvZE&quot;,
            &quot;slug&quot;: &quot;uTX5Q9ofQm&quot;,
            &quot;content&quot;: &quot;Sed occaecati error blanditiis aliquid consequatur dignissimos. Est nulla in ut. Voluptatem excepturi et molestiae omnis.\n\nEa quaerat repellat qui qui dolorum dolorem fugiat. Earum aut officiis sed laborum rerum et. Modi ducimus hic natus ut praesentium nam.\n\nVoluptatem qui aut aspernatur quaerat impedit quae. Temporibus possimus est itaque veniam nobis dignissimos soluta. Aut distinctio ipsum error consectetur ut. Voluptatem illum non ut quia est accusantium.\n\nRepellendus suscipit excepturi dolorem pariatur. Ut libero maxime itaque consequatur nihil expedita in. Consequuntur odit eos enim sed ut. Corrupti sed quae nostrum dolorem tenetur enim consequatur.\n\nNihil sed hic necessitatibus et aliquid ea debitis quaerat. Ad consequatur laudantium fuga vel dignissimos provident. Enim eos dolor et atque aspernatur. Sint ut tempore sed sunt. Et deleniti quo sed perferendis et nobis inventore.&quot;,
            &quot;cover&quot;: &quot;/tmp/0f144a5788f13495c816160bb8e16d66.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:45:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:45:15.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;title&quot;: &quot;s7vuCDiYxR&quot;,
            &quot;slug&quot;: &quot;7HlKVwXOGd&quot;,
            &quot;content&quot;: &quot;Alias qui aut rerum et dolorem quia voluptatem. Soluta esse iusto doloribus labore accusamus sed. Et sequi repellendus aliquam enim. Dolor totam velit incidunt pariatur voluptatem laudantium ut.\n\nFugit laboriosam similique sint voluptatem. Recusandae cum minus porro quas sint perferendis quia deserunt. Mollitia ratione quod nobis ut sit.\n\nDolorem velit odit ut aliquam sequi. Assumenda voluptatum suscipit itaque similique libero sunt ut. Nesciunt optio blanditiis officiis porro beatae.\n\nQuia repellat neque omnis et enim fuga. Qui nostrum repellendus ut voluptas nostrum. Facere laboriosam est commodi unde reprehenderit. Porro est adipisci delectus dolor sit natus.\n\nIncidunt fugiat cum rem ut debitis nisi explicabo. Corporis quia ullam nihil reiciendis reprehenderit rerum nulla. Odit quam molestiae voluptatem sunt ipsa culpa velit. Sit odit occaecati consequatur odio ut quis aut.&quot;,
            &quot;cover&quot;: &quot;/tmp/eb8bbc0b58f5ff604265904cda9109a9.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:46:54.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:46:54.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;title&quot;: &quot;P6TjdaIVtd&quot;,
            &quot;slug&quot;: &quot;lFUIHG9ZAi&quot;,
            &quot;content&quot;: &quot;Omnis vel corrupti consequatur itaque. Ut quam voluptas facilis est. Ea ducimus necessitatibus sunt consequatur aut. Minima sint ullam aspernatur omnis minus.\n\nCulpa voluptates earum dolorem quis nihil. Ea ab distinctio voluptatem molestiae eos illo suscipit. Sit exercitationem tempore et rerum tempore ut culpa. Nemo est ut sit nobis.\n\nEst consequuntur voluptatum praesentium ullam aliquid quae facilis. Voluptas illum deserunt deleniti non. Debitis consequuntur sint aspernatur possimus. Fugit ut temporibus at et nisi laborum dolor.\n\nCulpa natus laudantium eum delectus rem qui. Laudantium eos reiciendis aut. Velit eos vel vel in quo impedit sunt molestias. Modi consequuntur molestiae amet voluptatem cumque.\n\nLaudantium et optio dolorem aut beatae. Quaerat iure et nihil est et ab ducimus. Eos odio commodi ipsam nulla tenetur nisi. Et et qui sunt dolor earum minima dolores.&quot;,
            &quot;cover&quot;: &quot;/tmp/197d5a7375167853ff4a556043ac5d93.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:48:30.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:48:30.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;title&quot;: &quot;l2P2dh7L6z&quot;,
            &quot;slug&quot;: &quot;VDuTdqifIP&quot;,
            &quot;content&quot;: &quot;Non consequatur tempore modi enim. Nemo dolor dolor architecto amet molestiae veritatis. Omnis et rerum animi accusamus ut. Molestiae mollitia dolores quaerat quis.\n\nFacere quos rerum veniam eos. Dolorem veritatis sunt saepe rerum at iste. Pariatur quod neque ratione quia. Inventore provident fugiat exercitationem incidunt eum omnis.\n\nSoluta dicta voluptatibus beatae velit sed id fugit minus. Perferendis laboriosam voluptatibus et enim.\n\nAut deleniti minima quaerat libero inventore. Animi repellendus vero suscipit harum id ea. Consequatur animi mollitia odit.\n\nAmet labore voluptate aut quo. Non vitae qui ipsum excepturi. Ex sequi id enim nihil et.&quot;,
            &quot;cover&quot;: &quot;/tmp/6fa40ef9c196c9d8085ab0fc16fb9ec9.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:48:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:48:55.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;title&quot;: &quot;k6LCDLcsR7&quot;,
            &quot;slug&quot;: &quot;x9dLu6oq7Y&quot;,
            &quot;content&quot;: &quot;Quas et sit rerum a voluptatum iure. Et sint velit molestias aut porro quo earum. Adipisci enim quas ea aliquam quod porro sequi dolorem. Laborum saepe at vitae et possimus consectetur enim.\n\nDicta dolores aut ratione blanditiis quasi molestias doloremque. Molestiae sint consequatur numquam in. Quia qui fuga fugiat et quia ea nihil qui. Voluptatem optio sequi deserunt. Facilis quisquam deleniti possimus ad qui.\n\nEnim sed omnis non officia dolor. Quidem consequatur est inventore velit.\n\nAut doloremque sunt esse occaecati harum sequi. Molestiae modi ea vero qui et. Odio vitae molestiae quo assumenda. Fugiat et aut accusamus saepe tempora fuga.\n\nExpedita vel ad totam fugiat quos. Sequi voluptatum consectetur incidunt nisi et. Voluptatibus non optio quae. Sit ad autem similique ex nulla ad qui. Eveniet itaque corrupti et dolores aut voluptas.&quot;,
            &quot;cover&quot;: &quot;/tmp/c3ef26af5d05d7e00a57a5c87210fa28.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:49:21.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:49:21.000000Z&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;title&quot;: &quot;LOxHC2WGFr&quot;,
            &quot;slug&quot;: &quot;ec6wQqzt3R&quot;,
            &quot;content&quot;: &quot;Autem vel ut dolor in qui. Illum iure velit fugiat omnis similique. Est necessitatibus non consequatur quo dolor. Illo atque ut repellat eaque eaque.\n\nLabore vel deleniti omnis modi. Qui suscipit quaerat fugiat non architecto quisquam. Eum accusamus tenetur placeat deserunt.\n\nLaborum quia nobis ducimus excepturi. Beatae debitis reiciendis qui ex impedit veritatis unde. Amet enim error tempore saepe quo incidunt reiciendis. Ab enim praesentium dolores aliquid eaque dolorem soluta.\n\nRerum a error eum harum. In voluptatem rerum consequatur nulla. Molestiae ducimus temporibus sequi.\n\nQuos voluptate laudantium ipsum dignissimos. Tempore ab eligendi quo harum eos. Vero expedita vel iusto sed. Voluptatem deleniti rerum et cupiditate eius voluptas.&quot;,
            &quot;cover&quot;: &quot;/tmp/c1e1fcb21ed1a04ed26f07fd4060b8ba.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:50:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:50:12.000000Z&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;title&quot;: &quot;KH6PFDkb8n&quot;,
            &quot;slug&quot;: &quot;OC19qcshIe&quot;,
            &quot;content&quot;: &quot;Earum dolor dolore culpa voluptatem facilis. Vel et iure repellendus esse facilis. Commodi et consectetur delectus enim eum excepturi vero. Dolorem explicabo dolor id ut quia qui vel.\n\nIn facilis ea enim in quaerat. Cumque eligendi fuga iusto. Dolorem deserunt est nesciunt qui. Necessitatibus beatae quam dolor consequatur iste est tenetur.\n\nVoluptate architecto ducimus et eligendi modi quod doloremque. Ea nihil quia molestiae harum aut repellat. Nobis quae quidem quaerat sequi est cupiditate sed.\n\nMollitia rem doloremque magnam omnis consequatur aliquam. Perspiciatis magnam reprehenderit maiores possimus. Facilis ipsam sint voluptate in.\n\nQuas ut ut quis sed sed sunt sed. Est exercitationem inventore nostrum expedita quidem. Et aut quidem qui id similique.&quot;,
            &quot;cover&quot;: &quot;/tmp/a376d49cb5388d02567527f52931f718.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:50:39.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:50:39.000000Z&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;title&quot;: &quot;DO4cYaxdrg&quot;,
            &quot;slug&quot;: &quot;WTVPAjDIxG&quot;,
            &quot;content&quot;: &quot;Cupiditate odio omnis reprehenderit enim animi doloremque veniam. Rerum iure neque aliquam eum. Optio libero fugit facilis dignissimos. Dolorem asperiores labore velit vel temporibus ut.\n\nDucimus non provident ipsum sint totam quia. Officiis porro laudantium dolores animi consequatur dolores. Ut est doloribus soluta nulla.\n\nQuam animi sed illo deleniti nostrum architecto quisquam molestias. Quis maxime saepe praesentium molestias est vero dolorem. Aliquam laborum dolorum aut quia placeat non neque.\n\nEt quia odit vel dolorem et sint. Ab dolor autem harum occaecati quidem dolorem. Qui adipisci nam inventore odio aut blanditiis. Nulla autem iure quas veniam quisquam harum.\n\nNumquam mollitia enim cum. Fuga maxime beatae quo ullam culpa aliquid. Eligendi eius odit ut tenetur eos fuga eum.&quot;,
            &quot;cover&quot;: &quot;/tmp/4d1176af9aca17a1e3b7ca8ab051c6de.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:51:01.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:51:01.000000Z&quot;
        },
        {
            &quot;id&quot;: 19,
            &quot;title&quot;: &quot;bYX0wYEetV&quot;,
            &quot;slug&quot;: &quot;46cqTYmSEH&quot;,
            &quot;content&quot;: &quot;Alias nulla voluptatem dignissimos eius quaerat. Nobis atque similique dolores et sunt. Eveniet cum id laboriosam aut recusandae.\n\nSapiente nam neque eum similique quae. Nemo fuga quisquam rerum deserunt et voluptates omnis. Facilis adipisci voluptates eum non nam temporibus. Dolor temporibus maiores aspernatur molestiae atque fugiat est.\n\nAdipisci ut placeat distinctio. Est fugiat qui dolorem sit culpa voluptatem. Rerum aperiam ea quam ipsam rerum ea sed aut. Accusantium et voluptatem nostrum et dicta molestiae placeat.\n\nVel dignissimos quia consequatur dolore voluptatem voluptatem magni. Quia autem tempora fuga qui architecto. Itaque quo reprehenderit laudantium ipsum minima. Quibusdam nam quis rerum blanditiis voluptatem. Sunt nobis expedita a ut tempora est facilis fugit.\n\nFuga occaecati harum voluptas repellendus voluptas nam. Non ipsa eum quasi voluptatibus odit veniam accusantium quo. Eius tempora reprehenderit veritatis aspernatur et corrupti et. Numquam cumque dolorem minima dolorem omnis.&quot;,
            &quot;cover&quot;: &quot;/tmp/4e462ec2e81db7dabd1a4fbbbf406c32.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:54:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:54:18.000000Z&quot;
        },
        {
            &quot;id&quot;: 20,
            &quot;title&quot;: &quot;6JBo0vmxq4&quot;,
            &quot;slug&quot;: &quot;htE1VMoa6e&quot;,
            &quot;content&quot;: &quot;Ullam quo sapiente eveniet delectus ea sed sit. Culpa exercitationem ipsa nihil dicta labore necessitatibus aut. Sed illum nisi iste consequatur dolor dolorum.\n\nAt et velit atque ad fugit a. Ut aut velit nostrum adipisci laboriosam autem velit facilis. Voluptatem vel doloremque est itaque et. Velit dolorem in delectus quos. Rerum sapiente dolore provident accusantium.\n\nOptio nesciunt quam expedita esse soluta alias quidem. Qui quam dolorem ea atque. Incidunt tempora cupiditate rem numquam et ducimus sint fuga. Ut ut qui tempore minus quis sed. Tenetur et repudiandae et reprehenderit officiis aliquam.\n\nQui rerum quod cupiditate dolores nihil enim aut reprehenderit. Iusto quia dolor eos quo molestiae. Rerum quam adipisci optio ut voluptas ut. Ut earum voluptatibus sequi et et ipsa a sequi.\n\nLaboriosam inventore tenetur provident voluptatem. Impedit animi illum nulla dolor at. Necessitatibus natus sunt ipsa eligendi et. Totam ut suscipit quis minima rerum sequi natus.&quot;,
            &quot;cover&quot;: &quot;/tmp/038ddd9c7dac4afd143f7d11d685f63f.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T16:57:07.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T16:57:07.000000Z&quot;
        },
        {
            &quot;id&quot;: 21,
            &quot;title&quot;: &quot;5AqpKxiLiD&quot;,
            &quot;slug&quot;: &quot;0zDLtxbGl8&quot;,
            &quot;content&quot;: &quot;Officia est dolor at autem libero dolor officia. Et nobis molestias dolorum ducimus. Ipsum laudantium iusto qui ea cumque voluptates.\n\nOfficia id fugiat qui consequatur et id. Repudiandae ipsa amet voluptas. Dolorum sunt aut a doloribus aut quam excepturi repellat.\n\nNam quas eveniet dolorum aut magnam et accusamus. Nihil dolore aut blanditiis nobis blanditiis cumque sed.\n\nSint quisquam et consectetur voluptatem impedit et. Suscipit soluta inventore ullam ut velit quia voluptas. Tempore voluptatibus nulla commodi quas. Saepe libero doloribus quaerat odio iusto. Aut optio sed dolores sint velit sed sint.\n\nLabore quia ex facere possimus. Quia consequuntur nostrum ducimus quo sed. Non dignissimos placeat vel unde aliquam quia optio. Accusantium deleniti non et quia delectus similique. Aut fugit odio commodi dolore excepturi.&quot;,
            &quot;cover&quot;: &quot;/tmp/77038c39df4caf644dfab3b272955fa8.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:06:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:06:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 22,
            &quot;title&quot;: &quot;pEQhMLHNP1&quot;,
            &quot;slug&quot;: &quot;q0j5VsEUvI&quot;,
            &quot;content&quot;: &quot;Perspiciatis quis reprehenderit tenetur sequi. Id quidem nam ea quidem vel nulla. Suscipit voluptatem quidem facilis earum dignissimos eum magni. Nemo corrupti atque rem alias molestiae.\n\nAssumenda officiis porro sunt atque consequatur. Voluptas quas veritatis vero sed. Eos suscipit esse eos aut possimus eligendi earum. Corporis ducimus vero in et aut.\n\nAutem aspernatur saepe maxime mollitia eum quo dolores. Dicta dolorem ut sequi ut dolor.\n\nQuibusdam soluta quaerat repellendus nobis adipisci voluptatem. Quo tempore sed id aperiam. Consequatur aut voluptatibus repellat architecto. Distinctio nihil aut sit dolores repudiandae. Alias labore dolor ut eos omnis atque.\n\nDelectus et distinctio temporibus delectus reprehenderit error unde sint. Occaecati voluptates perspiciatis mollitia velit. Adipisci quia a cupiditate.&quot;,
            &quot;cover&quot;: &quot;/tmp/d6c5fbf475cda2f52134b23c0a576a2b.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:06:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:06:23.000000Z&quot;
        },
        {
            &quot;id&quot;: 23,
            &quot;title&quot;: &quot;UhJRhwJLtj&quot;,
            &quot;slug&quot;: &quot;EVAQAYivrH&quot;,
            &quot;content&quot;: &quot;Illo sed iusto dicta unde iusto quo rem. Velit cumque nam ex ut omnis.\n\nEt quia rem ipsa molestiae eaque voluptatem autem ut. Amet iure officia asperiores omnis neque explicabo aut. Recusandae in excepturi omnis qui quae. Repellat nemo doloribus amet dolorem ea quia molestiae.\n\nEnim consequatur minima deleniti fugiat nihil. Dolor ipsa est hic itaque. Vel voluptas incidunt ea aut et. Minima ut recusandae et hic in voluptas nisi.\n\nProvident aut illo corrupti placeat in. Sapiente iusto qui fugit saepe vero. Eius laborum ad esse aut. Fuga dolorem eaque voluptatibus dicta.\n\nLaboriosam sapiente voluptatem magni omnis sit recusandae ut ad. Aliquam perferendis accusantium corporis est et qui. Id rerum eveniet eos voluptatum. Id maxime minima ex et quis. Voluptas velit asperiores ut sit voluptas voluptate non.&quot;,
            &quot;cover&quot;: &quot;/tmp/4eda021aa0387677d978c7898e5efe68.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:06:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:06:24.000000Z&quot;
        },
        {
            &quot;id&quot;: 24,
            &quot;title&quot;: &quot;qjTTcKQPY9&quot;,
            &quot;slug&quot;: &quot;QqbET7pEO0&quot;,
            &quot;content&quot;: &quot;Id error dolorem et nesciunt architecto occaecati. Voluptatem vel voluptate ratione adipisci voluptate. Id unde atque sint sunt.\n\nBlanditiis atque impedit hic omnis pariatur sit. Sed ipsa aut minima mollitia magnam consectetur impedit. Error temporibus aliquid aut consequatur ea.\n\nHarum velit consequatur illo architecto doloribus. Eum quas enim vero sed. Voluptatem non accusantium consequuntur ut ipsum ducimus quos. Neque sunt dolores iure.\n\nRepudiandae sed blanditiis ut minus architecto porro. Necessitatibus voluptate voluptatem aut. Aliquam natus temporibus sint ratione. Consequuntur consequatur eum cum dolorum sunt vero sunt sit.\n\nAlias porro vitae odio voluptatem quia tenetur. Id amet rerum sint consequatur mollitia. Culpa aperiam amet quisquam explicabo.&quot;,
            &quot;cover&quot;: &quot;/tmp/1a0afdf17554435728c067f55c566a80.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:07:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:07:11.000000Z&quot;
        },
        {
            &quot;id&quot;: 25,
            &quot;title&quot;: &quot;ZCraJHroZU&quot;,
            &quot;slug&quot;: &quot;l2e7DE94cQ&quot;,
            &quot;content&quot;: &quot;Illum ea ut ipsam possimus cumque dolor deserunt. Suscipit consequuntur molestias repellendus dicta vitae dolores. Et sed voluptatibus quia quo odit. Et reprehenderit nesciunt et beatae.\n\nVoluptatem excepturi rerum amet sed ut nobis necessitatibus. Sequi modi aut repudiandae ducimus natus laborum. Voluptatem labore sunt id sint consequatur deserunt.\n\nEsse beatae assumenda sapiente cupiditate sapiente et. Ullam iure quas in nam qui in aperiam.\n\nMaxime totam dolorem rerum blanditiis saepe. Voluptatum eius quod eius. Optio consequuntur sint iure ab dignissimos. Molestiae molestias tenetur vel earum.\n\nIpsa ipsam est tenetur et doloribus. Aut tempore porro nam vero aut sint. Accusamus natus molestias dignissimos quia. Est blanditiis temporibus et distinctio.&quot;,
            &quot;cover&quot;: &quot;/tmp/ae87654a9666f479c531104909cd0122.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:07:37.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:07:37.000000Z&quot;
        },
        {
            &quot;id&quot;: 26,
            &quot;title&quot;: &quot;ppLsu4Y77M&quot;,
            &quot;slug&quot;: &quot;402nKXLUfN&quot;,
            &quot;content&quot;: &quot;Quas reiciendis quam suscipit aut repellat. Sed voluptas quod suscipit dolorum. Qui aut distinctio dignissimos natus dolore ut.\n\nVoluptatum officiis praesentium magnam qui. Est aperiam non sit qui. Sit odio voluptatem et ad vero nemo.\n\nEsse explicabo voluptatibus debitis nihil possimus ut dolor dolore. Doloremque quisquam tempore nesciunt nihil sapiente aut harum. Ea quae sint praesentium eum suscipit quo. Impedit voluptatem suscipit omnis dolores.\n\nRepellendus dignissimos rem ut impedit fuga est. Laboriosam delectus doloremque est itaque et ipsum ipsa. Deserunt velit ab sed nobis veritatis optio repellendus.\n\nImpedit dolor incidunt corporis. Non illo nihil omnis voluptates veritatis aliquam totam. Velit recusandae nisi quisquam aspernatur minus in.&quot;,
            &quot;cover&quot;: &quot;/tmp/690a877265c8f3df9fc19ead53c3f73b.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:07:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:07:52.000000Z&quot;
        },
        {
            &quot;id&quot;: 27,
            &quot;title&quot;: &quot;I53Au6Y8fP&quot;,
            &quot;slug&quot;: &quot;qaIXJO1WZX&quot;,
            &quot;content&quot;: &quot;Minus iusto dolorum ab ut architecto sint eum. Dolor harum natus hic architecto. Expedita rerum et magnam error maiores. Maiores similique quia error et.\n\nSoluta odio magnam est excepturi blanditiis id inventore. Molestias eveniet maxime fugit omnis. Sit voluptas pariatur quidem molestiae est.\n\nIure amet tempore et quas quia. Eligendi voluptatem earum corrupti. Nesciunt unde sit quo repudiandae repellendus eligendi non.\n\nFacilis quia quis possimus. Sunt incidunt placeat distinctio iure omnis autem quas assumenda. Et aliquid illum et facere veniam.\n\nRerum ut hic facilis non doloremque atque dolores. Repudiandae ad dolores ut sapiente.&quot;,
            &quot;cover&quot;: &quot;/tmp/b194ce3b4d57115be94c348e7c6bea47.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:08:51.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:08:51.000000Z&quot;
        },
        {
            &quot;id&quot;: 28,
            &quot;title&quot;: &quot;i5VswWnyTb&quot;,
            &quot;slug&quot;: &quot;UzxkKuJrZq&quot;,
            &quot;content&quot;: &quot;Voluptatem voluptatibus in modi minus accusamus dignissimos. Tempore ullam est in nulla sit.\n\nOdio laborum libero velit reprehenderit labore culpa. Dolor culpa non impedit atque. Quia fugit sed quidem perspiciatis eveniet ut ipsam.\n\nVoluptas dolore voluptatem quam quo quis. Dolorem natus dolor corporis itaque qui error. Voluptatem et quia velit unde. Dolorem similique quia velit placeat a nulla minima.\n\nOdit aspernatur amet quo pariatur. Et animi omnis deserunt qui consectetur provident sed. Doloremque quod quod eos exercitationem sapiente. Voluptates asperiores non sunt praesentium debitis.\n\nMollitia officiis voluptatum voluptatem similique harum praesentium. Sint aspernatur dolores ut eaque voluptatum commodi totam. Commodi autem saepe optio aut. Tenetur nesciunt et reiciendis similique. Ut quo excepturi et rem assumenda est.&quot;,
            &quot;cover&quot;: &quot;/tmp/d6647d4d96dd773feab6edd801770679.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:09:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:09:09.000000Z&quot;
        },
        {
            &quot;id&quot;: 29,
            &quot;title&quot;: &quot;pQXoKLNVx1&quot;,
            &quot;slug&quot;: &quot;etWVMTWRDF&quot;,
            &quot;content&quot;: &quot;Ipsa occaecati illo velit deleniti et error. Fugit tenetur qui dicta. Ut nulla animi vero cupiditate. Rerum voluptas quibusdam unde quam.\n\nEst voluptatem blanditiis ut quasi. Necessitatibus quasi sed similique. Sunt optio aut culpa dignissimos exercitationem officia dolore ipsam.\n\nQuia qui ipsum officia earum. Et quisquam quia rerum sit explicabo fugiat. Possimus aliquam aut incidunt saepe sed.\n\nDeleniti nihil consequatur mollitia. Quos quidem cupiditate veritatis. Molestiae harum qui consequatur.\n\nPerferendis suscipit placeat provident ut mollitia ex odio quasi. Omnis et dolor eum quo culpa quas. Inventore laboriosam quis facilis porro dicta. Ut sed fugiat illo consequuntur suscipit porro.&quot;,
            &quot;cover&quot;: &quot;/tmp/46fc0172313f0ddcba1effd4ba31c44a.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:12:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:12:43.000000Z&quot;
        },
        {
            &quot;id&quot;: 30,
            &quot;title&quot;: &quot;oyqZ1jwDCE&quot;,
            &quot;slug&quot;: &quot;ToP59wgUOs&quot;,
            &quot;content&quot;: &quot;Ea deleniti sed porro. Doloremque occaecati eligendi quis sit. Nobis facilis quos at dignissimos qui. Ratione ut voluptatem unde.\n\nUt voluptatem eaque placeat quis ut quidem odio. Incidunt pariatur minima minus sunt molestias. Et voluptas voluptates ipsam quidem quo pariatur.\n\nSit repellendus enim est. Sit et eum esse corrupti ratione id voluptate. Accusantium aut fuga explicabo et laborum. Consectetur consectetur repudiandae dolore rem maiores dignissimos tenetur.\n\nQui vero itaque error blanditiis. Rerum sit nihil sed mollitia cum. Est et et quaerat et.\n\nNon et itaque ipsam beatae. Similique impedit quaerat maiores cumque distinctio. Omnis et unde itaque reiciendis. Fugiat iste sint vel nobis aut.&quot;,
            &quot;cover&quot;: &quot;/tmp/5cef73eec0c71f5a930d9c11de23ba0a.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:13:19.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:13:19.000000Z&quot;
        },
        {
            &quot;id&quot;: 31,
            &quot;title&quot;: &quot;cqrnSLg8mz&quot;,
            &quot;slug&quot;: &quot;PFkmXtwzlw&quot;,
            &quot;content&quot;: &quot;Facilis at voluptates est nostrum. Ut reprehenderit non consequatur dolores.\n\nSoluta cupiditate delectus est et quam id. Rerum non reprehenderit voluptate velit. Animi voluptas quaerat et voluptatum et repudiandae.\n\nVoluptatem eos et neque rem. Voluptatem voluptas eius sint omnis ea. Tempora inventore quia quis id. Inventore dolor quo voluptatem pariatur perferendis nihil commodi repellendus.\n\nSapiente sed eius dolores adipisci. Tempore ducimus dolores maiores ducimus eligendi. Est sit inventore maxime voluptatem similique animi. Aspernatur eum nesciunt corrupti.\n\nSit nobis magni sequi est id. Natus nostrum molestiae quia non nisi. Aut quas voluptatem architecto dicta molestias dicta. Ea quod odio minus saepe est quaerat.&quot;,
            &quot;cover&quot;: &quot;/tmp/2cffa72c9fa6d7f953b244dd8a83a804.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:13:59.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:13:59.000000Z&quot;
        },
        {
            &quot;id&quot;: 32,
            &quot;title&quot;: &quot;Zuk6XXxzIb&quot;,
            &quot;slug&quot;: &quot;7khFMOZZfe&quot;,
            &quot;content&quot;: &quot;Quam voluptatem voluptate non sint numquam molestiae. Libero qui aliquam eum tenetur eaque officiis sapiente. Porro cumque hic minima dolorem.\n\nIusto sit commodi aut qui saepe provident et. In eaque assumenda facere est reprehenderit ea.\n\nIn accusamus voluptate vero et eum. Necessitatibus aut qui ipsam minus non ducimus. Numquam illum nam ea vel accusantium. Est voluptatum inventore quod quos architecto qui.\n\nFugit magnam quas ut distinctio quisquam fuga pariatur ullam. Blanditiis magnam voluptas inventore qui est veniam.\n\nQuasi est ut laborum veritatis iure ratione ratione. In ipsa et sed est. Neque tenetur possimus illo nobis. Quidem eaque itaque commodi corporis sit.&quot;,
            &quot;cover&quot;: &quot;/tmp/219a3548a7c6227268c44b27b4876a1b.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:20:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:20:16.000000Z&quot;
        },
        {
            &quot;id&quot;: 33,
            &quot;title&quot;: &quot;SOAvbzaDtG&quot;,
            &quot;slug&quot;: &quot;PlZNf24CJY&quot;,
            &quot;content&quot;: &quot;Aut qui totam aspernatur illo. Maxime expedita eos et. Quam deserunt debitis quia molestiae eveniet.\n\nMaxime corporis esse corporis earum in odit totam. Quibusdam soluta eos harum perferendis vel id a. Impedit quis ea quo eum aut.\n\nTenetur neque aut autem nisi numquam dignissimos ipsam molestiae. Aperiam commodi sit consectetur iure eum. Sed qui iusto laboriosam rerum eligendi.\n\nConsequatur blanditiis qui dignissimos quibusdam voluptate eaque molestias. Autem vitae nihil sit veniam molestiae et repudiandae quaerat. Commodi nostrum a at neque sed.\n\nDolorum porro illo et itaque. Velit sed saepe necessitatibus. Voluptatem commodi dignissimos vitae perferendis qui. Id et laborum quia debitis et ipsam.&quot;,
            &quot;cover&quot;: &quot;/tmp/42f240538335927d996d5ceefdd585dc.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:24:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:24:13.000000Z&quot;
        },
        {
            &quot;id&quot;: 34,
            &quot;title&quot;: &quot;0nG57MJpfp&quot;,
            &quot;slug&quot;: &quot;MS7GPvTClS&quot;,
            &quot;content&quot;: &quot;Aspernatur nam tenetur sapiente sed rem laboriosam iure. Ipsum aliquid dolore enim est. Natus tempore officia repudiandae ad. Aut autem dolor tempore sed.\n\nSit omnis laudantium nesciunt voluptate magni eveniet. Et explicabo tempore voluptas perspiciatis eaque. Maxime iure delectus dicta non repellendus.\n\nDebitis dolore deserunt error non quae similique ex. Eaque consequatur explicabo mollitia consequatur. Sed fuga cumque rerum ut qui dolores ratione reprehenderit. Velit eos magnam libero rerum eligendi.\n\nEum placeat dolor aut in deleniti. Ipsum repellendus tenetur animi consectetur et. Velit est est quae molestiae.\n\nOmnis sed aut enim. Animi est voluptatem possimus quo ut dolore occaecati. Mollitia non quisquam non sed et laudantium.&quot;,
            &quot;cover&quot;: &quot;/tmp/639606b72ab7cec7c45daac9daeda290.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:25:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:25:03.000000Z&quot;
        },
        {
            &quot;id&quot;: 35,
            &quot;title&quot;: &quot;hqYlu5OrAH&quot;,
            &quot;slug&quot;: &quot;TBiRBmoJRQ&quot;,
            &quot;content&quot;: &quot;Doloremque minus tempore tempora illo magnam. Maxime aut omnis a. Culpa illum reprehenderit fuga quidem expedita.\n\nVel impedit et officiis itaque. Veritatis voluptatum quidem impedit esse. Vel nemo accusantium rem minus atque ut. Doloribus occaecati dolorum et provident.\n\nFugiat ut dolorum facere. Deserunt dolores eum architecto corrupti. Qui atque explicabo perferendis enim aliquam eveniet. Totam aut odit autem enim sapiente.\n\nVoluptatem accusantium nulla corporis est quaerat qui repellat. Molestiae dolore temporibus nihil. Maiores odio eaque quia voluptatum repudiandae sed. Tenetur sit consequuntur inventore nobis.\n\nQuis consequatur voluptatem quis rem perferendis temporibus voluptas. Voluptate debitis aut voluptate veniam ad. Sint dicta libero consequuntur optio quam sit.&quot;,
            &quot;cover&quot;: &quot;/tmp/1866d449aaf62197fe0fb1eb1266cd00.png&quot;,
            &quot;likes&quot;: 0,
            &quot;views&quot;: 0,
            &quot;created_at&quot;: &quot;2022-01-22T17:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-22T17:35:34.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-articles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-articles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles"></code></pre>
</span>
<span id="execution-error-GETapi-articles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles"></code></pre>
</span>
<form id="form-GETapi-articles" data-method="GET"
      data-path="api/articles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-articles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-articles"
                    onclick="tryItOut('GETapi-articles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-articles"
                    onclick="cancelTryOut('GETapi-articles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-articles" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/articles</code></b>
        </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
