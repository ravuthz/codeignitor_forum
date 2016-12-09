<html>
    <head>
        <title>{blog_title}</title>
        <style type="text/css">
            .container {
                width: 80%;
                margin: 0px auto;
            }
            .container h3 {
                margin: 5px;
                padding: 5px;
            }
            .blog {
                border: 3px solid green; 
                margin: 5px; 
                padding: 5px;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <h3>{blog_heading}</h3>

            {blog_entries}
                <div class="blog">
                    <h5>{title}</h5>
                    <p>{body}</p>
                </div>
            {/blog_entries}
        </div>
    </body>
</html>