<!-- Checkout Modal Start -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="#" method="post" id="checkout-form" name="checkout-form">
            <input type="hidden" name="action" value="send_inquiry_form"/>
            <input type="text" class="website_hp" name="website_hp"/>

          <!-- Modal header start -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Complete reservation</h4>
          </div>
          <!-- Modal header end -->

          <!-- Modal body start -->
          <div class="modal-body">

            <!-- Checkout Info start -->
            <div class="checkout-info-box">
              <h3><i class="fa fa-info-circle"></i> Upon completing this reservation enquiry, you will receive::</h3>
              <p>Your rental voucher to produce on arrival at the rental desk and a toll-free customer support number.</p>
            </div>
            <!-- Checkout Info end -->

            <!-- Checkout Rental Info start -->
            <div class="checkout-vehicle-info">
              <div class="location-date-info">
                <h3>Location & Date</h3>
                <div class="info-box">
                  <span class="glyphicon glyphicon-calendar"></span>
                  <h4 class="info-box-title">Pick-Up Time</h4>
                  <p class="info-box-description"><span id="pick-up-date-ph"></span> at <span id="pick-up-time-ph"></span></p>
                  <input type="hidden" name="pick-up" id="pick-up" value="">
                </div>
                <div class="info-box">
                  <span class="glyphicon glyphicon-calendar"></span>
                  <h4 class="info-box-title">Drop-Off Time</h4>
                  <p class="info-box-description"><span id="drop-off-date-ph"></span> at <span id="drop-off-time-ph"></span></p>
                  <input type="hidden" name="drop-off" id="drop-off" value="">
                </div>
                <div class="info-box">
                  <span class="glyphicon glyphicon-map-marker"></span>
                  <h4 class="info-box-title">Pick-Up Location</h4>
                  <p class="info-box-description" id="pickup-location-ph"></p>
                  <input type="hidden" name="pickup-location" id="pickup-location" value="">
                </div>
                <div class="info-box">
                  <span class="glyphicon glyphicon-map-marker"></span>
                  <h4 class="info-box-title">Drop-Off Location</h4>
                  <p class="info-box-description" id="dropoff-location-ph"></p>
                  <input type="hidden" name="dropoff-location" id="dropoff-location" value="">
                </div>
              </div>

              <div class="vehicle-info">
                <h3>CAR: <span id="selected-car-ph"></span></h3> <a href="#vehicles" class="scroll-to">[ Vehicle Models ]</a>
                <input type="hidden" name="selected-car" id="selected-car" value="">
                <div class="clearfix"></div>
                <div class="vehicle-image">
                  <img class="img-responsive" id="selected-vehicle-image" src="img/vehicle1.jpg" alt="Vehicle">
                </div>
              </div>

              <div class="clearfix"></div>

            </div>
            <!-- Checkout Rental Info end -->

            <hr>

            <!-- Checkout Personal Info start -->
            <div class="checkout-personal-info">
              <div class="alert hidden" id="checkout-form-msg">
                test
              </div>
              <h3>PERSONAL INFORMATION</h3>
              <div class="form-group left">
                <label for="first-name">First Name:</label>
                <input type="text" class="form-control" name="first-name" id="first-name" placeholder="Enter your first name">
              </div>
              <div class="form-group right">
                <label for="last-name">Last Name:</label>
                <input type="text" class="form-control" name="last-name" id="last-name" placeholder="Enter your last name">
              </div>
              <div class="form-group left">
                <label for="phone-number">Phone Number:</label>
                <input type="text" class="form-control" name="phone-number" id="phone-number" placeholder="Enter your phone number">
              </div>
              <div class="form-group right age">
                <label for="age">Age:</label>
                <div class="styled-select-age">
                  <select name="age" id="age">
                  <option value="18">18</option>
                   <option value="19">19</option>
                   <option value="20">20</option>
                   <option value="21">21</option>
                   <option value="22">22</option>
                   <option value="23">23</option>
                   <option value="24">24</option>
                   <option value="25">25</option>
                   <option value="26">26</option>
                   <option value="27">27</option>
                   <option value="28">28</option>
                   <option value="29">29</option>
                   <option value="30">30</option>
                   <option value="31">31</option>
                   <option value="32">32</option>
                   <option value="33">33</option>
                   <option value="34">34</option>
                   <option value="35">35</option>
                   <option value="36">36</option>
                   <option value="37">37</option>
                   <option value="38">38</option>
                   <option value="39">39</option>
                   <option value="40">40</option>
                   <option value="41">41</option>
                   <option value="42">42</option>
                   <option value="43">43</option>
                   <option value="44">44</option>
                   <option value="45">45</option>
                   <option value="46">46</option>
                   <option value="47">47</option>
                   <option value="48">48</option>
                   <option value="49">49</option>
                   <option value="50">50</option>
                   <option value="51">51</option>
                   <option value="52">52</option>
                   <option value="53">53</option>
                   <option value="54">54</option>
                   <option value="55">55</option>
                   <option value="56">56</option>
                   <option value="57">57</option>
                   <option value="58">58</option>
                   <option value="59">59</option>
                   <option value="50">50</option>
                   <option value="61">61</option>
                   <option value="62">62</option>
                   <option value="63">63</option>
                   <option value="64">64</option>
                   <option value="65">65</option>
                   <option value="66">66</option>
                   <option value="67">67</option>
                   <option value="68">68</option>
                   <option value="69">69</option>
                   <option value="70">70</option>
                   <option value="71">71</option>
                   <option value="72">72</option>
                   <option value="73">73</option>
                   <option value="74">74</option>
                   <option value="75">75</option>
                   <option value="76">76</option>
                   <option value="77">77</option>
                   <option value="78">78</option>
                   <option value="79">79</option>
                   <option value="80">80</option>
                   <option value="81">81</option>
                   <option value="82">82</option>
                   <option value="83">83</option>
                   <option value="84">84</option>
                   <option value="85">85</option>
                   <option value="86">86</option>
                   <option value="87">87</option>
                   <option value="88">88</option>
                   <option value="89">89</option>
                   <option value="90">90</option>
                   <option value="91">91</option>
                   <option value="92">92</option>
                   <option value="93">93</option>
                   <option value="94">94</option>
                   <option value="95">95</option>
                   <option value="96">96</option>
                   <option value="97">97</option>
                   <option value="98">98</option>
                   <option value="99">99</option>
                   <option value="100">100</option>
                 </select>
               </div>
             </div>
             <div class="form-group left">
              <label for="email-address">Email Address:</label>
              <input type="email" class="form-control" name="email-address" id="email-address" placeholder="Enter your email address">
            </div>
            <div class="form-group right">
              <label for="email-address-confirm">Confirm Email Address:</label>
              <input type="email" class="form-control" name="email-address-confirm" id="email-address-confirm" placeholder="Confirm your email address">
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- Checkout Personal Info end -->

          <!-- Checkout Address Info start -->
          <div class="checkout-address-info">
            <div class="form-group address">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Street an No.">
            </div>
            <div class="form-group city">
              <label for="city">City</label>
              <input type="text" class="form-control" name="city" id="city" placeholder="Enter your City">
            </div>
            <div class="form-group zip-code">
              <label for="zip-code">Zip Code</label>
              <input type="text" class="form-control" name="zip-code" id="zip-code" placeholder="Enter your Zip Code">
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- Checkout Address Info end -->

          <div class="newsletter">
            <div class="form-group">
              <div class="checkbox">
                <input id="check1" type="checkbox" name="newsletter" value="yes">
                <label for="check1">Please send me latest news and updates</label>
              </div>
            </div>

          </div>
        </div>
        <!-- Modal body end -->

        <!-- Modal footer start -->
        <div class="modal-footer">
          <span class="btn-border btn-gray">
            <button type="button" class="btn btn-default btn-gray" data-dismiss="modal">Cancel</button>
          </span>
          <span class="btn-border btn-yellow">
            <button type="submit" class="btn btn-primary btn-yellow">Reserve now</button>
          </span>
        </div>
        <!-- Modal footer end -->

      </form>
    </div>
  </div>
</div>
<!-- Checkout Modal end -->