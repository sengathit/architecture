var SetActiveNav = function (str) {
	var sav = this;
	sav.str = str;
	this.setActiveNav = function () {
		$(sav.str).addClass('activeLink');
		//console.log('xxxx : ' + sav.str);
	}
	this.setActiveNav();
}
