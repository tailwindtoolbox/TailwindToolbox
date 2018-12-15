                    <?php
                    // Store Card template
                    $card ='
                    <!--{{title}} Template-->
                    <div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0">
                        <a href="{{url}}" class="no-underline hover:no-underline">
                            <div class="card">
                                <div class="p-5 text-center">
                                    <img src="{{url_image}}" class="h-full w-4/5 md:w-full rounded shadow">
                                    <div class="font-bold text-xl mt-3 mb-1">{{title}}</div>
                                    
                                    <p class="text-grey-darker text-base mb-2">
                                        {{description}}
                                    </p>
                                    <p class="text-grey-darker text-base mb-5"><a class="no-underline" href="{{url_author}}" target="_blank" rel="noopener"><span><svg class="h-4 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> {{author}}</a></p>

                                    <a href="{{url}}" target="_blank" rel="noopener"><button class="template-btn"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg> Visit Template</button></a>
                                            
                                </div>
                            </div>
                        </a>
                    </div>
                    ';

                    // Read JSON file
                    $json = file_get_contents("js.json");
                    //Decode JSON
                    $json_data = json_decode($json,true);

                    //Print data
                            foreach($json_data as $template)
                            {
                                $url = $template['url'];
                                $url_image = $template['url_image'];
                                $title = $template['title'];
                                $description = $template['description'];
                                $url_author = $template['url_author'];
                                $author = $template['author'];

                                $cardOutput = str_replace(
                                                array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{url_author}}', '{{author}}'),
                                                array($url,$url_image,$title,$description,$url_author,$author),
                                                $card);
                                
                                echo $cardOutput;
                            }
                                        
                            ?>