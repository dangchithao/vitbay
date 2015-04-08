var Menu = function() {};
// static variable
Menu.instance = null;

Menu.prototype.tabActive = function(tabName) {
	document.getElementById(tabName).className = "active";
};

// singleton
Menu.getInstance = function() {
	if (this.instance == null) {
		this.instance = new Menu();
	}
	
	return this.instance;
};

var menu = Menu.getInstance();

