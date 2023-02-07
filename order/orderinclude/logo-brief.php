<div class="col-lg-9">
                <div class="row" style="display: flex;flex-wrap: wrap;">
                    <div class="col-md-12">
                        <form id="logo_brief_data"  enctype="multipart/form-data" action="order_details">
                            <div class="col-md-12 form-sec step-1-form logo-brief-form">
                                <h4 style="margin-bottom: 30px">Logo Brief</h4>
                                <ul>
                                    <li>
                                        <label>IS THIS A RE-DESIGN OR A NEW LOGO? <span class="req-field-star">*</span></label>
                                        <input type="text" id="logotext1" name="re_design" required>
                                    </li>
                                    <li>
                                        <label>SELECT WHAT TYPE(S) OF YOUR LOGO SHOULD BE LOOK LIKE?</label>
                                        <div class="select-logo">
                                            <ul class="list-inline">
                                              <li><input type="checkbox" id="cb1" value="HIGH-TECH" name ="logo"/>
                                                <label for="cb1"><img src="breiflogo/sony-e-log.jpg" /></label>
                                                <p>HIGH-TECH</p>
                                              </li>

                                              <li><input type="checkbox" id="cb2" value="MINIMALIST" name ="logo"/>
                                                <label for="cb2"><img src="breiflogo/anderoid-pic.jpg" /></label>
                                                <p>MINIMALIST</p>
                                              </li>
                                              <li><input type="checkbox" id="cb3" value="TYPOGRAPHY" name="logo"/>
                                                <label for="cb3"><img src="breiflogo/cola-pic.jpg" /></label>
                                                <p>TYPOGRAPHY</p>
                                              </li>
                                              <li><input type="checkbox" id="cb4" value="CORPORATE" name="logo"/>
                                                <label for="cb4"><img src="breiflogo/mico-pic.jpg" /></label>
                                                <p>CORPORATE</p>
                                              </li>
                                              <li><input type="checkbox" id="cb5" value="ILLUSTRATIVE" name="logo"/>
                                                <label for="cb5"><img src="breiflogo/kfc-log.jpg" /></label>
                                                <p>ILLUSTRATIVE</p>
                                              </li>
                                              <li><input type="checkbox" id="cb6" value="INITIALS" name="logo"/>
                                                <label for="cb6"><img src="breiflogo/gn-lo.jpg" /></label>
                                                <p>INITIALS</p>
                                              </li>
                                              <li><input type="checkbox" id="cb7" value="FUN" name="logo"/>
                                                <label for="cb7"><img src="breiflogo/fanta-log.jpg" /></label>
                                                <p>FUN</p>
                                              </li>
                                              <li><input type="checkbox" id="cb8" value="SPORTY" name="logo"/>
                                                <label for="cb8"><img src="breiflogo/egale-log.jpg" /></label>
                                                <p>SPORTY</p>
                                              </li>
                                              <li><input type="checkbox" id="cb9" value="SHIELD" name="logo"/>
                                                <label for="cb9"><img src="breiflogo/porch-log.jpg" /></label>
                                                <p>SHIELD</p>
                                              </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <label>WORD/NAME THAT YOU WANT IN LOGO TO APPEAR (TYPE IN EXACTLY AS YOU
                                            WANTED).<span class="req-field-star">*</span></label>
                                        <input type="text"  id="logotext2" name="text1" required>
                                    </li>
                                    <li>
                                        <label>TAGLINE THAT YOU WANT IN LOGO TO APPEAR.</label>
                                        <input type="text" id="logotext3" name="tag_line">
                                    </li>
                                    <li>
                                        <label>PLEASE PROVIDE A BRIEF DESCRIPTION OF YOUR BUSINESS. YOU MAY ALSO WANT TO
                                            LIST WEBSITE ADDRESSES OF YOUR COMPETITORS, IF ANY.</label>
                                        <input type="text" id="logotext4" name="description_text">
                                    </li>
                                    
                                    <li>
                                        <label>ANYTHING THAT YOU DO NOT LIKE AND WE SHOULD AVOID THAT IN OUR DESIGN
                                            CONCEPT. (COLOR, PICTURE OR CERTAIN NATURE, ETC)</label>
                                        <input type="text" id="logotext5" name="design_concept">
                                    </li>
                                    <li>
                                        <label>EXISTING WEBSITE ADDRESS, IF ANY</label>
                                        <input type="text" id="logotext6" name="website_address">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 form-sec ">
                                <ul>
                                    <li class="submit-btn">
                                        <div id="formResult"></div>
                                        <button  type="submit" class="btn btn-red a-btn" id="briefFormBtn"
                                                >Continue
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>