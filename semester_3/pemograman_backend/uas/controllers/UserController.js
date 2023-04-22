const Joi = require('joi');
const prisma = require('../config/database');
const { UserCreateRequest } = require('../requests/UserRequest');

class UserController {
    async index (req, res)  {
        const users = await prisma.user.findMany()

        res.send({
            'code' : 200,
            'message' : "Success Get All Data",
            'data': users
        })
    }

    async create(req, res)  {


        const validation = await UserCreateRequest.validate(req.body).error

        if (validation) {
            res.status(422).send({
                'code' : 422,
                'response' : 'error validation',
                'message' : validation.details[0].message,
            })
        } 

        const validationEmail = await prisma.user.findUnique({
            where: {
                email: req.body.email,
            },
        })

        if (validationEmail) {
            res.status(422).send(   {
                'code' : 422,
                'response' : 'error validation email',
                'message' : "Email has already exists!",
            })
        } 
        else {

            const user = await prisma.user.create({
                data: req.body
            })
    
            res.status(201).send({
                'code' : 201,
                'response' : 'success',
                'message' : "Success Create Data",
                'data': validation
            })

        }


    }
}

module.exports = new UserController();
