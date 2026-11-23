<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'slug' => 'starter',
                'name_en' => 'Starter',
                'name_ar' => 'المبتدئة',
                'description_en' => 'For individuals and small teams getting started with structured workflows.',
                'description_ar' => 'للأفراد والفرق الصغيرة التي تبدأ بتنظيم سير العمل.',
                'monthly_price' => 20,
                'annual_price' => 13,
                'annual_total' => 156,
                'features_en' => [
                    'Up to 5 team members',
                    '10 active dashboards',
                    'Basic automations (50/mo)',
                    '7-day data history',
                    'Email support',
                ],
                'features_ar' => [
                    'حتى 5 أعضاء في الفريق',
                    '10 لوحات معلومات نشطة',
                    'أتمتة أساسية (50 شهريًا)',
                    'سجل بيانات لمدة 7 أيام',
                    'دعم عبر البريد الإلكتروني',
                ],
                'featured' => false,
            ],
            [
                'slug' => 'pro',
                'name_en' => 'Professional',
                'name_ar' => 'الاحترافية',
                'description_en' => 'For growing teams that need powerful automation and advanced reporting.',
                'description_ar' => 'للفرق النامية التي تحتاج إلى أتمتة قوية وتقارير متقدمة.',
                'monthly_price' => 60,
                'annual_price' => 39,
                'annual_total' => 468,
                'features_en' => [
                    'Up to 25 team members',
                    'Unlimited dashboards',
                    'Advanced automations (unlimited)',
                    '90-day data history',
                    'Priority chat support',
                    'Mobile app access',
                ],
                'features_ar' => [
                    'حتى 25 عضوًا في الفريق',
                    'لوحات معلومات غير محدودة',
                    'أتمتة متقدمة غير محدودة',
                    'سجل بيانات لمدة 90 يومًا',
                    'دعم أولوية عبر المحادثة',
                    'الوصول إلى تطبيق الهاتف',
                ],
                'featured' => true,
            ],
            [
                'slug' => 'ent',
                'name_en' => 'Enterprise',
                'name_ar' => 'المؤسسات',
                'description_en' => 'For large organizations with custom requirements and compliance needs.',
                'description_ar' => 'للمؤسسات الكبيرة ذات المتطلبات الخاصة واحتياجات الامتثال.',
                'monthly_price' => 150,
                'annual_price' => 98,
                'annual_total' => 1176,
                'features_en' => [
                    'Unlimited members',
                    'Custom integrations & API',
                    'SSO & advanced permissions',
                    'Unlimited data history',
                    'Dedicated success manager',
                    'SOC 2 & compliance reports',
                ],
                'features_ar' => [
                    'أعضاء غير محدودين',
                    'تكاملات مخصصة وواجهة API',
                    'دخول موحد وصلاحيات متقدمة',
                    'سجل بيانات غير محدود',
                    'مدير نجاح مخصص',
                    'تقارير SOC 2 والامتثال',
                ],
                'featured' => false,
            ],
        ];

        foreach ($plans as $plan) {
            Plan::updateOrCreate(
                ['slug' => $plan['slug']],
                $plan
            );
        }
    }
}