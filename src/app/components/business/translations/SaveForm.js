'use client';

import React, { useState, useEffect } from 'react';


const TranslationSaveForm = () => {
  return (
    <div className='w-full w-1/2'>
      <form className="w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div className="w-full">
          <label className="block tracking-wide text-gray-700 font-bold mb-2" for="grid-state">
            Language code
          </label>
          <div className="relative">
            <select className="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
              <option>ru</option>
              <option>en</option>
              <option>fr</option>
            </select>
            <div className="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg className="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
            </div>
        </div>

        <div className="mt-3 w-full">
          <label className="block tracking-wide text-gray-700 font-bold mb-2" for="grid-state">
            Type
          </label>
          <div className="relative">
            <select className="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
              <option>Word</option>
              <option>Sentence</option>
              <option>Paragraph</option>
            </select>
            <div className="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg className="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
            </div>
        </div>

        <div className="w-full mt-4">
          <label className="block tracking-wide text-gray-700 font-bold mb-2" for="grid-textarea">
            Text
          </label>
          <textarea className="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-textarea" rows="4"></textarea>
        </div>

        <div className="mt-5 flex items-center justify-between">
          <button className="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Add
          </button>
        </div>
      </form>
    </div>
  );
};

export default TranslationSaveForm;