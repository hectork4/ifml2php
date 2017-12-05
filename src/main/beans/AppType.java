package main.beans;

public class AppType {
	private String type;
	
	public AppType(String type){
		this.type = (type == "web" || type == "console" || type == "api")? type : "web";
	}
	public String getType() {
		return type;
	}

	public void setType(String type) {
		this.type = type;
	}
	
	
}
