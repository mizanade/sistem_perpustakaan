import { Badge } from '@/Components/ui/badge';
import { FINEPAYMENTSTATUS } from '@/lib/utils';

export default function GetFineStatusBadge({ status }) {
    const { PENDING, SUCCESS, FAILED } = FINEPAYMENTSTATUS;

    let badge, text;

    switch (status) {
        case PENDING:
            badge = 'text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-500 border-yellow-500';
            text = 'Menunggu Pembayaran';
            break;
        case SUCCESS:
            badge = 'text-white bg-gradient-to-r from-green-400 via-green-500 to-green-500 border-green-500';
            text = 'Berhasil';
            break;
        case FAILED:
            badge = 'text-white bg-gradient-to-r from-red-400 via-red-500 to-red-500 border-red-500';
            text = 'Gagal';
            break;
        default:
            badge = 'text-white bg-gradient-to-r from-orange-400 via-orange-500 to-orange-500 border-orange-500';
            text = '-';
            break;
    }

    return <Badge className={badge}>{text}</Badge>;
}
