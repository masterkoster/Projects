//test 3

const name = 1
console.log("test " + name + " test")

const Brands = ['Suzuki', 'Honda', 'BMW']
Brands[5] = 'Harley'

Brands.push('Aprilla')
Brands.unshift('Yamaha')
console.log(Brands)
console.log(Brands[2])

const person = {
    firstName:'johnn',
    lastName: 'doe' ,
    hobbies: ['riding', 'snowboarding', 'flying'],
    address: {
        street:'Blokmakersstraat',
        city: 'Rotterdam',
        state:'South Holland'
    }
}

console.log(person);
console.log(person.hobbies[2])
console.log(person.address.city)
console.log(person.address.state)

const { firstName, lastName, address: {city}} = person;
console.log(city);
person.email = 'david@koster.im';
console.log(person.email);