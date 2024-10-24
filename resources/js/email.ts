import emailjs from 'emailjs-com';

interface EmailFormData {
    name: string;
    email: string;
    message: string;
}

const sendEmail = (formData: EmailFormData): void => {
    const serviceID = 'service_5vav4wi';
    const templateID = 'template_x8jaf7h';
    const userID = 'eMrdSXV8jcBbTOF7f';

    const templateParams = {
        from_name: formData.name,
        from_email: formData.email,
        message: formData.message,
    };

    emailjs.send(serviceID, templateID, templateParams, userID)
        .then((response) => {
            console.log('Email sent successfully!', response.status, response.text);
        })
        .catch((error) => {
            console.error('Error sending email:', error);
        });
};

const handleSubmit = (event: Event): void => {
    event.preventDefault();

    const formData: EmailFormData = {
        name: (document.getElementById('name') as HTMLInputElement).value,
        email: (document.getElementById('email') as HTMLInputElement).value,
        message: (document.getElementById('message') as HTMLInputElement).value,
    };

    sendEmail(formData);
};

document.getElementById('email-form')?.addEventListener('submit', handleSubmit);
