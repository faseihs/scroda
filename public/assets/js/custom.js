$(document).ready(function(){
    var rand_numb = Math.floor(Math.random() * 2) + 1 ;

    setTimeout(function () {
    	console.log(rand_numb);
    	$(".bg-popup-wrap").fadeIn(500);
    	var classname = "#popup" + rand_numb;
    	setTimeout(function(){$(classname).fadeIn(400);}, 300);
    },3500);

    $(".bg-popup-wrap").click(function(){
    	$(".bg-popup-wrap").fadeOut(500);
    	$("#popup2").fadeOut(500);
    	$("#popup1").fadeOut(500);
    });
    $(".popup-close").click(function(){
    	$(".bg-popup-wrap").fadeOut(500);
    	$("#popup2").fadeOut(500);
    	$("#popup1").fadeOut(500);
    });



    
});

var ctx = document.getElementById("tokenDist").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Bounty", "Bonus & Reserve", "Advisors & Partners",  "Project Team","Private Sale, Pre-ICO & ICO"],
    datasets: [{
    label: '# of Votes',
    data: [2.5, 2.5, 3, 10, 82],
    backgroundColor: [
        'rgb(0, 79, 116)',
        'rgb(163, 226, 255)',
        'rgb(91, 203, 255)',
        'rgb(0, 146, 214)',
        'rgb(36, 184, 253)'
    ],
    borderColor: [
        'rgb(0, 79, 116)',
        'rgb(163, 226, 255)',
        'rgb(91, 203, 255)',
        'rgb(0, 114, 167)',
        'rgb(0, 146, 214)',
        'rgb(36, 184, 253)'
    ],
    borderWidth: 0
    }]
  },
  options: {
    legend: {
      display: false
    }
  }
});

var ctx1 = document.getElementById("usesFund").getContext('2d');
var myChart1 = new Chart(ctx1, {
  type: 'doughnut',
  data: {
    labels: ["Legal and Financial", "Headquarters Land Development", "Partnership",  "Admins and Advisors", "Sales and Marketing", "Team, IT and Research Development"],
    datasets: [{
    label: '# of Votes',
    data: [3.5, 6, 7, 13.5, 30, 40],
    backgroundColor: [
        'rgb(0, 114, 167)',
        'rgb(0, 79, 116)',
        'rgb(163, 226, 255)',
        'rgb(91, 203, 255)',
        'rgb(0, 146, 214)',
        'rgb(36, 184, 253)'
    ],
    borderColor: [
        'rgb(36, 184, 253)',
        'rgb(0, 146, 214)',
        'rgb(0, 114, 167)',
        'rgb(91, 203, 255)',
        'rgb(163, 226, 255)',
        'rgb(0, 79, 116)'
    ],
    borderWidth: 0
    }]
  },
  options: {
    legend: {
      display: false
    }
  }
});