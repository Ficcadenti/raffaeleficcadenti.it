function Vector_p(x,y)
{
	this.x=x;
	this.y=y;
}

Vector_p.prototype.plus = function(other) 
{
		return new Vector_p(this.x + other.x, this.y + other.y);
};

Vector_p.prototype.minus = function(other) 
{
		return new Vector_p(this.x - other.x, this.y - other.y);
};

Object.defineProperty(Vector_p.prototype, "length", 
{
		get: function() 
		{
		return Math.sqrt(this.x * this.x + this.y * this.y);
		}
});

class Vector
{
	constructor(x,y)
	{
		this.x=x;
		this.y=y;
	}

	plus (other) 
	{
			return new Vector(this.x + other.x, this.y + other.y);
	};

	minus(other) 
	{
			return new Vector(this.x - other.x, this.y - other.y);
	};

	get length()
	{
		return Math.sqrt(this.x * this.x + this.y * this.y);
	};

}

