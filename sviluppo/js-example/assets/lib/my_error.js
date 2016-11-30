function MyError(name,message) 
{
	this.name = name || 'Default Error';
	this.message = message || 'Default Message';
	this.stack = (new Error()).stack;
}

MyError.prototype = Object.create(Error.prototype);
MyError.prototype.constructor = MyError;