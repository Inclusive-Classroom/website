<?php
$PageTitle="Problem Description";

include_once('header.php');
?>

<? # Add custom HTML content below this line ?>
<div class="container">
  <div>
    <h1>Societal Problem Identification</h1>
    <p>Young underprivileged students are adversely affected by having to learn online because of a lack of stable high-speed Internet and because they lack the knowledge and support at home needed to adapt when the Internet fails.</p>
  </div>
  <div>
    <h1>Problem Characteristics</h1>
      <ul>
        <li>
          <h3>Affects younger students most</h3>
          <p>They have not built-up study habits. Older students are more familiar with apps.</p>
        </li>
        <li>
          <h3>Lack of technical knowledge at home</h3>
          <p>Parents may not be "tech savvy". Parents may also be at work.</p>
        </li>
        <li>
          <h3>Difficult to reach teachers</h3>
          <p>Limited forms of contact. IT is not the teachers specialty.</p>
        </li>
        <li>
          <h3>Lack of consistent high-speed internet at home</h3>
          <p>Public internet is potentionally dangerous and slow. These public wifi providers may also have time limits for when a user can be connected.</p>
        </li>
        <li>
          <h3>COVID is not going away</h3>
          <p>On 1/4/2021 we had the highest number of cases in the VA. The curve is continuing to trend upwards.</p>
        </li>
      </ul>
  </div>
  <div>
    <h1>Current Process Flow Chart</h1>
    <p>The point of intervention is during and after "Inconsistent/Bad Internet Connection"</p>
    <div id="current_process_flowchart">
      <img class="mx-auto shadow" id="current_process_image" src="./img/flow_chart.png" alt="Current Process Flow Chart">
    </div>
  </div>
</div>
<? # Do not change things below this line ?>
<?php
include_once('footer.php')
?>