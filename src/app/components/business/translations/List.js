'use client';

import React, { useState, useEffect } from 'react';
import TranslationSaveForm from './SaveForm';
import Link from 'next/link';


const TranslationList = () => {
  const [translationUnits, setTranslationUnits] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await fetch('http://localhost:8000/translations');
        const data = await response.json();
        setTranslationUnits(data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData();
  }, []);

  return (
    <div className='mt-3 bg-white shadow-md rounded px-8 pt-2 pb-6'>
      {translationUnits.map((unit) => (
        <div className='mt-4' key={unit.id}>
          <div className='flex'>
            <div>Unit type: <b>{unit.type}</b> |</div>
            <div className='ml-2'>Language code: <b>{unit.lang_code}</b></div>
          </div>
          <div><span className='italic'>{unit.text}</span></div>
          <button className='mt-3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>
            <Link href={`/SaveForm`} as={`/SaveForm`}>
              Edit
            </Link>
          </button>
        </div>
      ))}
    </div>
  );
};

export default TranslationList;