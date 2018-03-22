function setup() {

	loadJSON("http://api.open-notify.org/astros.json", gotData, 'jsonp');
}

function gotData(data) {
	 println(data);
	 //console.log(data);

}

function draw() {}