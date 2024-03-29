const Joi = require('joi');

const UserCreateRequest = Joi.object().keys({
    email: Joi.string().email().required(),
    name: Joi.string().required(),
    password: Joi.string().required()
});

module.exports = {
    UserCreateRequest
}