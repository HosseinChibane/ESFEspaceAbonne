<?php

/* ::base.html.twig */
class __TwigTemplate_067a276229e98f23a9b6ccd7d27671969fcfa7034f7ad9cfbe9d678ca79b18e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Head' => array($this, 'block_Head'),
            'Header' => array($this, 'block_Header'),
            'Navigation' => array($this, 'block_Navigation'),
            'Body' => array($this, 'block_Body'),
            'Footer' => array($this, 'block_Footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b660d61fa0e25f7230c130c2c85006b3a691b68fefd2b0dbddcb7f98affd5257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b660d61fa0e25f7230c130c2c85006b3a691b68fefd2b0dbddcb7f98affd5257->enter($__internal_b660d61fa0e25f7230c130c2c85006b3a691b68fefd2b0dbddcb7f98affd5257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_68dabb481c11d7c4593a3894ece43d9d53dd1dcc6b0c18a619f73d71c2fe2aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dabb481c11d7c4593a3894ece43d9d53dd1dcc6b0c18a619f73d71c2fe2aaf->enter($__internal_68dabb481c11d7c4593a3894ece43d9d53dd1dcc6b0c18a619f73d71c2fe2aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>

 ";
        // line 8
        echo " ";
        $this->displayBlock('Head', $context, $blocks);
        // line 11
        echo "
</head>
<body>
  ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        $this->displayBlock('Header', $context, $blocks);
        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        $this->displayBlock('Navigation', $context, $blocks);
        // line 23
        echo "
    ";
        // line 25
        echo "    ";
        $this->displayBlock('Body', $context, $blocks);
        // line 27
        echo "
    ";
        // line 29
        echo "    ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 32
        echo "  ";
        // line 33
        echo "</body>  
</html>
";
        
        $__internal_b660d61fa0e25f7230c130c2c85006b3a691b68fefd2b0dbddcb7f98affd5257->leave($__internal_b660d61fa0e25f7230c130c2c85006b3a691b68fefd2b0dbddcb7f98affd5257_prof);

        
        $__internal_68dabb481c11d7c4593a3894ece43d9d53dd1dcc6b0c18a619f73d71c2fe2aaf->leave($__internal_68dabb481c11d7c4593a3894ece43d9d53dd1dcc6b0c18a619f73d71c2fe2aaf_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_a84b988a4425e634ddfc9f8921891384e04a2eb1996eed4d8eaf42542da0f2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84b988a4425e634ddfc9f8921891384e04a2eb1996eed4d8eaf42542da0f2e3->enter($__internal_a84b988a4425e634ddfc9f8921891384e04a2eb1996eed4d8eaf42542da0f2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_ba193cf450bd1408e735565375a0c381885f3c0d8499081a616c58e401d916a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba193cf450bd1408e735565375a0c381885f3c0d8499081a616c58e401d916a0->enter($__internal_ba193cf450bd1408e735565375a0c381885f3c0d8499081a616c58e401d916a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_ba193cf450bd1408e735565375a0c381885f3c0d8499081a616c58e401d916a0->leave($__internal_ba193cf450bd1408e735565375a0c381885f3c0d8499081a616c58e401d916a0_prof);

        
        $__internal_a84b988a4425e634ddfc9f8921891384e04a2eb1996eed4d8eaf42542da0f2e3->leave($__internal_a84b988a4425e634ddfc9f8921891384e04a2eb1996eed4d8eaf42542da0f2e3_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_869d3d674cb92edeb5bac6573020e2597efcb3305717f46bf167b2628cc2f492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869d3d674cb92edeb5bac6573020e2597efcb3305717f46bf167b2628cc2f492->enter($__internal_869d3d674cb92edeb5bac6573020e2597efcb3305717f46bf167b2628cc2f492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_59bf06404ec33a111303cea4139e8c4b42b77344b410b8d8ace8da2a3534cc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bf06404ec33a111303cea4139e8c4b42b77344b410b8d8ace8da2a3534cc95->enter($__internal_59bf06404ec33a111303cea4139e8c4b42b77344b410b8d8ace8da2a3534cc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_59bf06404ec33a111303cea4139e8c4b42b77344b410b8d8ace8da2a3534cc95->leave($__internal_59bf06404ec33a111303cea4139e8c4b42b77344b410b8d8ace8da2a3534cc95_prof);

        
        $__internal_869d3d674cb92edeb5bac6573020e2597efcb3305717f46bf167b2628cc2f492->leave($__internal_869d3d674cb92edeb5bac6573020e2597efcb3305717f46bf167b2628cc2f492_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_d2987f8959ce9d2b846182aba45ff956ff5287ab84c64d781b843e8e950e270a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2987f8959ce9d2b846182aba45ff956ff5287ab84c64d781b843e8e950e270a->enter($__internal_d2987f8959ce9d2b846182aba45ff956ff5287ab84c64d781b843e8e950e270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_6dd87eaf54cbaa3c3e19cd42df9a3024c14f5533a07da2dcb1ed118fc9946d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd87eaf54cbaa3c3e19cd42df9a3024c14f5533a07da2dcb1ed118fc9946d0f->enter($__internal_6dd87eaf54cbaa3c3e19cd42df9a3024c14f5533a07da2dcb1ed118fc9946d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_6dd87eaf54cbaa3c3e19cd42df9a3024c14f5533a07da2dcb1ed118fc9946d0f->leave($__internal_6dd87eaf54cbaa3c3e19cd42df9a3024c14f5533a07da2dcb1ed118fc9946d0f_prof);

        
        $__internal_d2987f8959ce9d2b846182aba45ff956ff5287ab84c64d781b843e8e950e270a->leave($__internal_d2987f8959ce9d2b846182aba45ff956ff5287ab84c64d781b843e8e950e270a_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_b1b3fc96201aa8e8d374cb0d2984ca6259a90fabfaa6df868da0aaf1149179f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b3fc96201aa8e8d374cb0d2984ca6259a90fabfaa6df868da0aaf1149179f2->enter($__internal_b1b3fc96201aa8e8d374cb0d2984ca6259a90fabfaa6df868da0aaf1149179f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_6235b07e46cb10ad05cd041a3eacf3fd5db0041c858bb4bd6dd5601f72a72d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6235b07e46cb10ad05cd041a3eacf3fd5db0041c858bb4bd6dd5601f72a72d68->enter($__internal_6235b07e46cb10ad05cd041a3eacf3fd5db0041c858bb4bd6dd5601f72a72d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_6235b07e46cb10ad05cd041a3eacf3fd5db0041c858bb4bd6dd5601f72a72d68->leave($__internal_6235b07e46cb10ad05cd041a3eacf3fd5db0041c858bb4bd6dd5601f72a72d68_prof);

        
        $__internal_b1b3fc96201aa8e8d374cb0d2984ca6259a90fabfaa6df868da0aaf1149179f2->leave($__internal_b1b3fc96201aa8e8d374cb0d2984ca6259a90fabfaa6df868da0aaf1149179f2_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_0de95f36c5453a12846ab6aa2ae88154bc5beb0b58d6f5c2a5ab9fee5665a35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de95f36c5453a12846ab6aa2ae88154bc5beb0b58d6f5c2a5ab9fee5665a35d->enter($__internal_0de95f36c5453a12846ab6aa2ae88154bc5beb0b58d6f5c2a5ab9fee5665a35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_567eab34d876e1c942d49265b1535dbd8bab1d3f4ebc3e998e601ac5db62f441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567eab34d876e1c942d49265b1535dbd8bab1d3f4ebc3e998e601ac5db62f441->enter($__internal_567eab34d876e1c942d49265b1535dbd8bab1d3f4ebc3e998e601ac5db62f441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_567eab34d876e1c942d49265b1535dbd8bab1d3f4ebc3e998e601ac5db62f441->leave($__internal_567eab34d876e1c942d49265b1535dbd8bab1d3f4ebc3e998e601ac5db62f441_prof);

        
        $__internal_0de95f36c5453a12846ab6aa2ae88154bc5beb0b58d6f5c2a5ab9fee5665a35d->leave($__internal_0de95f36c5453a12846ab6aa2ae88154bc5beb0b58d6f5c2a5ab9fee5665a35d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 30,  166 => 29,  147 => 25,  135 => 21,  124 => 20,  105 => 16,  95 => 10,  93 => 9,  82 => 8,  70 => 33,  68 => 32,  65 => 29,  62 => 27,  59 => 25,  56 => 23,  53 => 20,  50 => 18,  47 => 16,  45 => 15,  40 => 11,  37 => 8,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layoutdudeego.html.twig #}

<!DOCTYPE html>
<html>
<head>

 {# Contenu de la balise head #}
 {% block Head %} 
   {% include ':backend:head.html.twig' %}
 {% endblock %}

</head>
<body>
  {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
    {# Contenu de l'en-tete #}
    {% block Header %} 
    {% endblock %}

    {# Contenu de la balise nav #}
    {% block Navigation %} 
      {% include ':backend:navigation.html.twig' %}   
    {% endblock %}

    {# Contenu du corps de page #}
    {% block Body %} 
    {% endblock %}

    {# Contenu du pied de page #}
    {% block Footer %} 
      {% include ':backend:footer.html.twig' %} 
    {% endblock %}
  {#{% endif %}#}
</body>  
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\views\\base.html.twig");
    }
}
