var Menu = {
  expanded: false,
  
  init: function() {
    this.navigation = document.getElementById('main-navigation');
    this.menuButton = document.getElementById('menu-button');
    this.menuButton.addEventListener('click', this.toggle.bind(this));
  },
  
  toggle: function(e) {
      if (this.expanded) {
        this.collapse();
      } else {
        this.expand();
      }
  },
  
  collapse: function() {
    this.expanded = false;
    this.menuButton.classList.remove('expanded');
    this.navigation.classList.remove('expanded');
  },
  
  expand: function() {
    this.expanded = true;
    this.navigation.classList.add('expanded');
    this.menuButton.classList.add('expanded');
  }
}

window.addEventListener('load', function page_onLoad() {
  window.removeEventListener('load', page_onLoad);
  Menu.init();
});