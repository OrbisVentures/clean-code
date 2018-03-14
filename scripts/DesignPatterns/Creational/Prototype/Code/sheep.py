import copy

class const:
	SHEEP_DEFENSE	= 1000
	SHEEP_MANA		= 1000
	BOAR_DEFENSE	= 2000
	BOAR_MANA		= 500
	SEAL_DEFENSE	= 1500
	SEAL_MANA		= 750

class BeastPrototype:
	_defense 	= None
	_mana		= None

	def clone(self):
		pass

	def getDefense(self):
		return self._defense

	def getMana(self):
		return self._mana

class Sheep(BeastPrototype):
	def __init__(self):
		self._defense 	= const.SHEEP_DEFENSE
		self._mana 		= const.SHEEP_MANA

	def clone(self):
		return copy.copy(self)

class Boar(BeastPrototype):
	def __init__(self):
		self._defense 	= const.BOAR_DEFENSE
		self._mana 		= const.BOAR_MANA

	def clone(self):
		return copy.copy(self)

class Seal(BeastPrototype):
	def __init__(self):
		self._defense 	= const.SEAL_DEFENSE
		self._mana 		= const.SEAL_MANA

	def clone(self):
		return copy.copy(self)

class BeastPrototypeFactory:
	__sheep = None
	__boar	= None
	__seal	= None

	@staticmethod
	def initialize():
		BeastPrototypeFactory.__sheep	= Sheep()
		BeastPrototypeFactory.__boar	= Boar()
		BeastPrototypeFactory.__seal	= Seal()

	@staticmethod
	def createSheep():
		return BeastPrototypeFactory.__sheep.clone()

	@staticmethod
	def createBoar():
		return BeastPrototypeFactory.__boar.clone()

	@staticmethod
	def createSeal():
		return BeastPrototypeFactory.__seal.clone()

def main():
	BeastPrototypeFactory.initialize()

	dolly = BeastPrototypeFactory.createSheep()
	sally = BeastPrototypeFactory.createSheep()

	print('=======SHEEPS=======')
	print('DOLLY: Defense: ', dolly.getDefense(), ' Mana: ', dolly.getMana())
	print('SALLY: Defense: ', sally.getDefense(), ' Mana: ', sally.getMana())
	print([i for i in (dolly, sally)])

if __name__ == '__main__' :
	main()
	 