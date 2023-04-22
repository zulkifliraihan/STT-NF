const Joi = require('joi');

const DatacovidCreateRequest = Joi.object().keys({
    total_kasus: Joi.number().integer().required(),
    total_sembuh: Joi.number().integer().required(),
    total_meninggal: Joi.number().integer().required(),
    total_dirawat: Joi.number().integer().required(),
    total_vaccined: Joi.number().integer().required(),
    country: Joi.string().required(),
});

const DatacovidUpdateRequest = Joi.object().keys({
    total_kasus: Joi.number().integer(),
    total_sembuh: Joi.number().integer(),
    total_meninggal: Joi.number().integer(),
    total_dirawat: Joi.number().integer(),
    total_vaccined: Joi.number().integer(),
    country: Joi.string().required(),
});

module.exports = {
    DatacovidCreateRequest,
    DatacovidUpdateRequest,
}