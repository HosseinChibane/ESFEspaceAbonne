<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_3f177243aad3212c75c98d83e3ee0f8abe5e71c8b8ac03d2e8164e906dbe4179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59010f34202bfdf52a32150a349c68191fde962624af2c6b29a0748a2c81266f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59010f34202bfdf52a32150a349c68191fde962624af2c6b29a0748a2c81266f->enter($__internal_59010f34202bfdf52a32150a349c68191fde962624af2c6b29a0748a2c81266f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_b404d23f2804dcef85405c814e8fdaa9c7fe2b7496393fc744645a7e4baead35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b404d23f2804dcef85405c814e8fdaa9c7fe2b7496393fc744645a7e4baead35->enter($__internal_b404d23f2804dcef85405c814e8fdaa9c7fe2b7496393fc744645a7e4baead35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_59010f34202bfdf52a32150a349c68191fde962624af2c6b29a0748a2c81266f->leave($__internal_59010f34202bfdf52a32150a349c68191fde962624af2c6b29a0748a2c81266f_prof);

        
        $__internal_b404d23f2804dcef85405c814e8fdaa9c7fe2b7496393fc744645a7e4baead35->leave($__internal_b404d23f2804dcef85405c814e8fdaa9c7fe2b7496393fc744645a7e4baead35_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_65b4665db21414c28086eee5ae3cb1580edbd5a3dd025ca64707efaf28c9f61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b4665db21414c28086eee5ae3cb1580edbd5a3dd025ca64707efaf28c9f61c->enter($__internal_65b4665db21414c28086eee5ae3cb1580edbd5a3dd025ca64707efaf28c9f61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_910424f575551f32d597eb003c58dc96acb9371c82ded65475eaa1e77c6ab815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910424f575551f32d597eb003c58dc96acb9371c82ded65475eaa1e77c6ab815->enter($__internal_910424f575551f32d597eb003c58dc96acb9371c82ded65475eaa1e77c6ab815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_910424f575551f32d597eb003c58dc96acb9371c82ded65475eaa1e77c6ab815->leave($__internal_910424f575551f32d597eb003c58dc96acb9371c82ded65475eaa1e77c6ab815_prof);

        
        $__internal_65b4665db21414c28086eee5ae3cb1580edbd5a3dd025ca64707efaf28c9f61c->leave($__internal_65b4665db21414c28086eee5ae3cb1580edbd5a3dd025ca64707efaf28c9f61c_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_5a5ac90e9e399435f0e674c4ad2130ae743bd0965f8b64d67650590831a62838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5ac90e9e399435f0e674c4ad2130ae743bd0965f8b64d67650590831a62838->enter($__internal_5a5ac90e9e399435f0e674c4ad2130ae743bd0965f8b64d67650590831a62838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_7e83769f6bb0f982dac1391a5580082bf37da699062196f235c89d82c770adc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e83769f6bb0f982dac1391a5580082bf37da699062196f235c89d82c770adc6->enter($__internal_7e83769f6bb0f982dac1391a5580082bf37da699062196f235c89d82c770adc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7e83769f6bb0f982dac1391a5580082bf37da699062196f235c89d82c770adc6->leave($__internal_7e83769f6bb0f982dac1391a5580082bf37da699062196f235c89d82c770adc6_prof);

        
        $__internal_5a5ac90e9e399435f0e674c4ad2130ae743bd0965f8b64d67650590831a62838->leave($__internal_5a5ac90e9e399435f0e674c4ad2130ae743bd0965f8b64d67650590831a62838_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_f1f77fec56e42210495631bf16b204bd65202961c6e2e9f534658f2640b9c67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f77fec56e42210495631bf16b204bd65202961c6e2e9f534658f2640b9c67d->enter($__internal_f1f77fec56e42210495631bf16b204bd65202961c6e2e9f534658f2640b9c67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_8dbb2e0e6fba019032e164392c450c99cb0cf809644f69b5f67a23048d331146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbb2e0e6fba019032e164392c450c99cb0cf809644f69b5f67a23048d331146->enter($__internal_8dbb2e0e6fba019032e164392c450c99cb0cf809644f69b5f67a23048d331146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8dbb2e0e6fba019032e164392c450c99cb0cf809644f69b5f67a23048d331146->leave($__internal_8dbb2e0e6fba019032e164392c450c99cb0cf809644f69b5f67a23048d331146_prof);

        
        $__internal_f1f77fec56e42210495631bf16b204bd65202961c6e2e9f534658f2640b9c67d->leave($__internal_f1f77fec56e42210495631bf16b204bd65202961c6e2e9f534658f2640b9c67d_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_e086fa66a983f126768e3a8fae34097a8ea6bc8a6605533180ea2766e54e28c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e086fa66a983f126768e3a8fae34097a8ea6bc8a6605533180ea2766e54e28c4->enter($__internal_e086fa66a983f126768e3a8fae34097a8ea6bc8a6605533180ea2766e54e28c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_e69104c240f1cee3e1e240b852dc46eac03f4c7ca353defb0d7d1fdeca8c369f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69104c240f1cee3e1e240b852dc46eac03f4c7ca353defb0d7d1fdeca8c369f->enter($__internal_e69104c240f1cee3e1e240b852dc46eac03f4c7ca353defb0d7d1fdeca8c369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e69104c240f1cee3e1e240b852dc46eac03f4c7ca353defb0d7d1fdeca8c369f->leave($__internal_e69104c240f1cee3e1e240b852dc46eac03f4c7ca353defb0d7d1fdeca8c369f_prof);

        
        $__internal_e086fa66a983f126768e3a8fae34097a8ea6bc8a6605533180ea2766e54e28c4->leave($__internal_e086fa66a983f126768e3a8fae34097a8ea6bc8a6605533180ea2766e54e28c4_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\vich\\uploader-bundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
