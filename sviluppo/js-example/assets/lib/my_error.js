
function MyError(name,message) 
{
	this.name = name || 'Default Error';
	this.message = message || 'Default Message';
	this.stack = (new Error()).stack;
}
MyError.prototype = Object.create(Error.prototype);
MyError.prototype.constructor = MyError;



function MyMailError(name,message,id) 
{
	this.name = name || 'Default Error';
	this.message = message || 'Default Message';
	this.stack = (new Error()).stack;
	this.id=id;
}
MyError.prototype = Object.create(MyError.prototype);
MyError.prototype.constructor = MyMailError;


function AssertionFailed(message) 
{
  this.message = message;
}
AssertionFailed.prototype = Object.create(Error.prototype);

function assert(test, message) 
{
  if (!test)
    throw new AssertionFailed(message);
}