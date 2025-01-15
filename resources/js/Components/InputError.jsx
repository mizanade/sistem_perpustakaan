import { cn } from '@/lib/utils';

export default function InputError({ message, className = '', ...props }) {
    return message ? (
        <p {...props} className={cn('text-xs font-medium text-red-500', className)}>
            {message}
        </p>
    ) : null;
}